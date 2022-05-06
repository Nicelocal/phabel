<?php

namespace Phabel\Target\Php80;

use Phabel\Context;
use Phabel\Plugin;
use Phabel\Plugin\TypeHintReplacer;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\AssignOp;

/**
 * Replace static, mixed and false typehints.
 *
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
class StaticMixedFalseReplacer extends Plugin
{
    public function enter(Assign $node, Context $context)
    {
        if (!$context->isParentStmt()) {
            $context->insertBefore($node, clone $node);
            return $node->var;
        }
    }
    public function enterOp(AssignOp $node, Context $context)
    {
        if (!$context->isParentStmt()) {
            $context->insertBefore($node, clone $node);
            return $node->var;
        }
    }
    public static function previous(array $config): array
    {
        return [
            TypeHintReplacer::class => [
                'types' => ['static', 'mixed', 'false']
            ]
        ];
    }
}
