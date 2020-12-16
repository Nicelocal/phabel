<?php

namespace PhabelTest\Target\Php71;

use Phabel\Context;
use PHPUnit\Framework\TestCase;
use Phabel\Target\Php73\ListReference;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\List_;
use PhpParser\Node\Expr\Variable;

/**
 * Polyfills list expression return value.
 */
class ListExpression extends TestCase
{
    /**
     * Parse list assignment.
     *
     * @param Assign $node List assignment
     *
     * @return ?Variable
     */
    public function enterAssign(Assign $node, Context $ctx): ?Variable
    {
        $isStmt = $ctx->parents[0]->getAttribute('currentNode') === 'stmts';
        if (!($node->var instanceof List_ || $node->var instanceof Array_) || $isStmt) {
            return null;
        }
        $list = $node->var;
        $var = $ctx->getVariable();
        $assignments = ListReference::splitList($list, $var);

        // On newer versions of php, the list assignment expression returns the original array
        $ctx->insertBefore($node, new Assign($var, $node->expr), ...$assignments);
        return $var;
    }
}
