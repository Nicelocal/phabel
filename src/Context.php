<?php

namespace Phabel;

use Phabel\Target\Php74\ArrowClosure;
use PhpParser\BuilderHelpers;
use PhpParser\ErrorHandler\Throwing;
use PhpParser\NameContext;
use PhpParser\Node;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Expr\ArrowFunction;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\AssignOp;
use PhpParser\Node\Expr\AssignRef;
use PhpParser\Node\Expr\BinaryOp\BooleanAnd;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;
use PhpParser\Node\Expr\BinaryOp\Coalesce;
use PhpParser\Node\Expr\BooleanNot;
use PhpParser\Node\Expr\Cast\Bool_;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\List_;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Ternary;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\FunctionLike;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt\ClassLike;
use PhpParser\Node\Stmt\Do_;
use PhpParser\Node\Stmt\Else_;
use PhpParser\Node\Stmt\ElseIf_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\For_;
use PhpParser\Node\Stmt\Foreach_;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\While_;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\PrettyPrinter\Standard;
use PhpParser\PrettyPrinterAbstract;
use SplStack;

/**
 * AST Context.
 *
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
class Context
{
    public const INSERT_BEFORE = 'Context:insertBefore';
    /**
     * Parent nodes stack.
     *
     * @var SplStack<Node>
     */
    public SplStack $parents;
    /**
     * Declared variables stack.
     *
     * @var SplStack<VariableContext>
     */
    public SplStack $variables;
    /**
     * Name resolver.
     *
     * @var NameResolver
     */
    public NameResolver $nameResolver;
    /**
     * Pretty printer.
     */
    public PrettyPrinterAbstract $prettyPrinter;
    /**
     * PHPDOC parser.
     */
    public PhpDocParser $phpdocParser;
    /**
     * Arrow closure converter.
     */
    private ArrowClosure $converter;
    /**
     * Current file.
     */
    private string $file;
    /**
     * Current input file.
     */
    private string $inputFile;
    /**
     * Current output file.
     */
    private string $outputFile;
    /**
     * Constructor.
     */
    public function __construct()
    {
        /** @var SplStack<Node> */
        $this->parents = new SplStack;
        /** @var SplStack<VariableContext> */
        $this->variables = new SplStack;
        $this->converter = new ArrowClosure;
        $this->prettyPrinter = new Standard();
        $this->phpdocParser = new PhpDocParser;
        $this->nameResolver = new NameResolver(
            new Throwing,
            [
                'preserveOriginalNames' => false,
                'replaceNodes' => false,
            ]
        );
        $this->nameResolver->beforeTraverse([]);
    }
    /**
     * Push node to name resolver.
     *
     * @param Node $node
     * @return void
     */
    public function pushResolve(Node $node): void
    {
        if (!$node->getAttribute('Context:nameResolved')) {
            $this->nameResolver->enterNode($node);
            $node->setAttribute('Context:nameResolved', true);
        }
    }
    /**
     * Push node.
     *
     * @param Node $node Node
     *
     * @return void
     */
    public function push(Node $node): void
    {
        $this->parents->push($node);
        if ($node instanceof RootNode) {
            $this->variables->push(new VariableContext);
        }
        if ($node instanceof FunctionLike) {
            $variables = \array_fill_keys(
                \array_map(
                    fn (Param $param): string => $param->var->name,
                    $node->getParams()
                ),
                true
            );
            if ($node instanceof Closure) {
                foreach ($node->uses as $use) {
                    $variables[$use->var->name] = true;
                    if ($use->byRef) {
                        $this->variables->top()->addVar($use->var->name);
                    }
                }
            } elseif ($node instanceof ArrowFunction) {
                $variables += $this->variables->top()->getVars();
            }
            $this->variables->push(new VariableContext($variables));
        } elseif ($node instanceof Assign || $node instanceof AssignOp || $node instanceof AssignRef) {
            $this->populateVars($node->var);
        } elseif ($node instanceof Foreach_) {
            if ($node->keyVar) {
                $this->populateVars($node->keyVar);
            }
            $this->populateVars($node->valueVar);
        } elseif ($node instanceof MethodCall || $node instanceof StaticCall || $node instanceof FuncCall) {
            // Cover reference parameters
            foreach ($node->args as $argument) {
                $argument = $argument->value;
                while ($argument instanceof ArrayDimFetch && $argument->var instanceof ArrayDimFetch) {
                    $argument = $argument->var;
                }
                if ($argument instanceof Variable && \is_string($argument->name)) {
                    $this->variables->top()->addVar($argument->name);
                }
            }
        }
    }
    /**
     * Populate variables.
     *
     * @return void
     */
    private function populateVars(Node $node): void
    {
        while ($node instanceof ArrayDimFetch && $node->var instanceof ArrayDimFetch) {
            $node = $node->var;
        }
        if ($node instanceof Variable && \is_string($node->name)) {
            $this->variables->top()->addVar($node->name);
        } elseif ($node instanceof List_ || $node instanceof Array_) {
            foreach ($node->items as $item) {
                if ($item) {
                    $this->populateVars($item->value);
                }
            }
        }
    }
    /**
     * Pop node.
     *
     * @return void
     */
    public function pop(): void
    {
        $popped = $this->parents->pop();
        if ($popped instanceof RootNode || $popped instanceof FunctionLike) {
            $poppedVars = $this->variables->pop();
            if ($popped instanceof ArrowFunction) {
                $this->variables->top()->addVars($poppedVars->getVars());
            }
        }
    }
    /**
     * Return new unoccupied variable.
     *
     * @return Variable
     */
    public function getVariable(): Variable
    {
        return new Variable($this->variables->top()->getVar());
    }
    /**
     * Get child currently being iterated on.
     *
     * @param Node $node
     * @return Node
     */
    public static function getCurrentChild(Node $node): Node
    {
        return self::getCurrentChildByRef($node);
    }
    /**
     * Get child currently being iterated on, by reference.
     *
     * @param Node $node
     * @return Node
     */
    public static function &getCurrentChildByRef(Node $node): Node
    {
        if (!$subNode = $node->getAttribute('currentNode')) {
            throw new \RuntimeException('Node is not a part of the current AST stack!');
        }
        $child = &$node->{$subNode};
        if (null !== $index = $node->getAttribute('currentNodeIndex')) {
            return $child[$index];
        }
        return $child;
    }
    /**
     * Insert nodes before node.
     *
     * @param Node $node      Node before which to insert nodes
     * @param Node ...$insert Nodes to insert
     * @return void
     */
    public function insertBefore(Node $node, Node ...$insert): void
    {
        if (empty($insert)) {
            return;
        }
        $found = false;
        foreach ($this->parents as $cur) {
            if ($found) {
                $parent = &$this->getCurrentChildByRef($cur);
                break;
            }
            if ($this->getCurrentChild($cur) === $node) {
                $found = true;
                if ($cur instanceof RootNode) {
                    $parent = &$this->parents[\count($this->parents) - 1];
                    break;
                }
            }
        }
        if (!$found) {
            throw new \RuntimeException('Node is not a part of the current AST stack!');
        }

        /** @var string */
        $parentKey = $parent->getAttribute('currentNode');
        if (($parentKey === 'stmts' || $parent instanceof For_) && !$parent instanceof ClassLike) {
            /** @var int */
            $nodeKeyIndex = $parent->getAttribute('currentNodeIndex');
            \array_splice($parent->{$parentKey}, $nodeKeyIndex, 0, $insert);
            $parent->setAttribute('currentNodeIndex', $nodeKeyIndex + \count($insert));
            return; // Done, inserted!
        }

        // Cannot insert, parent is not a statement
        //
        // If we insert before a conditional branch of a conditional expression,
        //   make sure the conditional branch has no side effects;
        //   if it does, turn the entire conditional expression into an if, and bubble it up
        //
        // Unless we want to go crazy, do not consider side effect evaluation order for stuff like function call arguments, maths and so on.
        //
        if ($parent instanceof BooleanOr && $parentKey === 'right') {
            $result = $this->getVariable();
            $insert = new If_(
                $parent->left,
                [
                    'stmts' => [
                        new Assign($result, BuilderHelpers::normalizeValue(true))
                    ],
                    'else' => new Else_([
                        ...$insert,
                        new Assign($result, new Bool_($parent->right))
                    ])
                ]
            );
            $parent = $result;
        } elseif ($parent instanceof BooleanAnd && $parentKey === 'right') {
            $result = $this->getVariable();
            $insert = new If_(
                $parent->left,
                [
                    'stmts' => [
                        ...$insert,
                        new Assign($result, new Bool_($parent->right))
                    ],
                    'else' => new Else_([
                        new Assign($result, BuilderHelpers::normalizeValue(false))
                    ])
                ]
            );
            $parent = $result;
        } elseif ($parent instanceof Ternary && $parentKey !== 'cond') {
            $result = $this->getVariable();
            if (!$parent->if) { // ?:
                $insert = new If_(
                    new BooleanNot(
                        new Assign($result, $parent->cond)
                    ),
                    [
                        'stmts' => [
                            ...$insert,
                            new Assign($result, $parent->else)
                        ]
                    ]
                );
            } else {
                $insert = new If_(
                    $parent->cond,
                    [
                        'stmts' => [
                            ...$parentKey === 'if' ? $insert : [],
                            new Assign($result, $parent->if)
                        ],
                        'else' => new Else_([
                            ...$parentKey === 'else' ? $insert : [],
                            new Assign($result, $parent->else)
                        ])
                    ]
                );
            }
            $parent = $result;
        } elseif ($parent instanceof Coalesce && $parentKey === 'right' && Tools::hasSideEffects($parent->right)) {
            $result = $this->getVariable();
            $insert = new If_(
                Plugin::call(
                    'is_null',
                    new Assign($result, $parent->left)
                ),
                [
                    'stmts' => [
                        ...$insert,
                        new Assign($result, $parent->right)
                    ]
                ]
            );
            $parent = $result;
        } elseif ($parent instanceof While_) {
            $parent->stmts = \array_merge($parent->stmts, $insert);
        } elseif ($parent instanceof Do_) {
            $parent->stmts = \array_merge($parent->stmts, $insert);
            return;
        } elseif ($parent instanceof ElseIf_ && $parentKey === 'cond') {
            $parent->setAttribute(self::INSERT_BEFORE, [...$parent->getAttribute(self::INSERT_BEFORE, []), ...$insert]);
            return;
        }
        $this->insertBefore($parent, ...(\is_array($insert) ? $insert : [$insert]));
    }
    /**
     * Insert nodes after node.
     *
     * @param Node $node     Node ater which to insert nodes
     * @param Node ...$nodes Nodes to insert
     * @return void
     */
    public function insertAfter(Node $node, Node ...$nodes): void
    {
        if (empty($nodes)) {
            return;
        }
        $found = false;
        foreach ($this->parents as $parent) {
            if ($this->getCurrentChild($parent) === $node) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            throw new \RuntimeException('Node is not a part of the current AST stack!');
        }
        $subNode = $parent->getAttribute('currentNode');
        $subNodeIndex = $parent->getAttribute('currentNodeIndex');
        \array_splice($parent->{$subNode}, $subNodeIndex+1, 0, $nodes);
    }

    /**
     * Gets name context.
     *
     * @return NameContext
     */
    public function getNameContext(): NameContext
    {
        return $this->nameResolver->getNameContext();
    }
    /**
     * Check if the parent node is a statement.
     *
     * @return bool
     */
    public function isParentStmt(): bool
    {
        $parent = $this->parents[0];
        return $parent instanceof Expression || $parent->getAttribute('currentNode') === 'stmts';
    }

    /**
     * Dumps AST.
     */
    public function dumpAst(Node $stmt): string
    {
        return $this->prettyPrinter->prettyPrint($stmt instanceof RootNode ? $stmt->stmts : [$stmt]);
    }
    /**
     * Convert a function to a closure.
     */
    public function toClosure(FunctionLike &$func): void
    {
        if ($func instanceof ArrowFunction) {
            $func = $this->converter->enter($func, $this);
        }
    }

    /**
     * Get absolute path of current output file.
     *
     * @return string
     */
    public function getOutputFile(): string
    {
        return $this->outputFile;
    }

    /**
     * Set absolute path of current input file.
     *
     * @param string $inputFile Current input file.
     *
     * @return self
     */
    public function setInputFile(string $inputFile): self
    {
        $this->inputFile = $inputFile;

        return $this;
    }
    /**
     * Get absolute path of current input file.
     *
     * @return string
     */
    public function getInputFile(): string
    {
        return $this->inputFile;
    }

    /**
     * Set absolute path of current output file.
     *
     * @param string $outputFile Current output file.
     *
     * @return self
     */
    public function setOutputFile(string $outputFile): self
    {
        $this->outputFile = $outputFile;

        return $this;
    }
}
