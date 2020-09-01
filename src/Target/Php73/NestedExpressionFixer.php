<?php

namespace Phabel\Target\Php73;

use Phabel\Plugin;
use Phabel\Plugin\NestedExpressionFixer as fixer;

class NestedExpressionFixer extends Plugin
{
    /**
     * Expression fixer for PHP 73.
     *
     * @return array
     */
    public static function runAfter(): array
    {
        return [
            fixer::class => [
  'PhpParser\\Node\\Expr\\Instanceof_' =>
  [
    'expr' =>
    [
      'PhpParser\\Node\\Scalar\\DNumber' => true,
      'PhpParser\\Node\\Scalar\\LNumber' => true,
      'PhpParser\\Node\\Scalar\\String_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Class_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Dir' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\File' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Function_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Line' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Method' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Namespace_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Trait_' => true,
    ],
  ],
]
        ];
    }
}
