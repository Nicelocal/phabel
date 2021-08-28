<?php

namespace Phabel\Target\Php73;

use Phabel\Plugin;
use Phabel\Plugin\NestedExpressionFixer as fixer;

/**
 * Expression fixer for PHP 73.
 */
class NestedExpressionFixer extends Plugin
{
    /**
     * {@inheritDoc}
     */
    public static function next(array $config)
    {
        $phabelReturn = [fixer::class => ['PhpParser\\Node\\Expr\\Instanceof_' => ['expr' => ['PhpParser\\Node\\Scalar\\DNumber' => true, 'PhpParser\\Node\\Scalar\\LNumber' => true, 'PhpParser\\Node\\Scalar\\String_' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Class_' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Dir' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\File' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Function_' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Line' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Method' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Namespace_' => true, 'PhpParser\\Node\\Scalar\\MagicConst\\Trait_' => true]]]];
        if (!\is_array($phabelReturn)) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type array, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
}
