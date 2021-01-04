<?php

namespace Phabel\Plugin;

use Phabel\Context;
use Phabel\Plugin;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\Expression;

/**
 * Wraps standalone expressions in statements into Stmt\Expressions
 */
class StmtExprWrapper extends Plugin
{
    public function enter(Expr $expr, Context $ctx): ?Expression
    {
        if ($ctx->parents[0]->getAttribute('currentNode') === 'stmts') {
            return new Expression($expr);
        }
        return null;
    }
}