<?php

namespace Phabel\Target\Php70;

use Phabel\Plugin;
use Phabel\Plugin\NestedExpressionFixer as fixer;

class NestedExpressionFixer extends Plugin
{
    /**
     * Expression fixer for PHP 70.
     *
     * @param array $config
     *
     * @return array
     */
    public static function runAfter(array $config): array
    {
        return [
            fixer::class => [
  'PhpParser\\Node\\Expr\\ArrayDimFetch' =>
  [
    'var' =>
    [
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\Print_' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\DNumber' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
      'PhpParser\\Node\\Scalar\\LNumber' => true,
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
  'PhpParser\\Node\\Expr\\ClassConstFetch' =>
  [
    'class' =>
    [
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\ClassConstFetch' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\FuncCall' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\MethodCall' => true,
      'PhpParser\\Node\\Expr\\New_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\PropertyFetch' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\StaticCall' => true,
      'PhpParser\\Node\\Expr\\StaticPropertyFetch' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
      'PhpParser\\Node\\Scalar\\String_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Class_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Dir' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\File' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Function_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Method' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Namespace_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Trait_' => true,
    ],
  ],
  'PhpParser\\Node\\Expr\\FuncCall' =>
  [
    'name' =>
    [
      'PhpParser\\Node\\Expr\\Array_' => true,
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\ClassConstFetch' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\ConstFetch' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\FuncCall' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\MethodCall' => true,
      'PhpParser\\Node\\Expr\\New_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\Print_' => true,
      'PhpParser\\Node\\Expr\\PropertyFetch' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\StaticCall' => true,
      'PhpParser\\Node\\Expr\\StaticPropertyFetch' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\DNumber' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
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
  'PhpParser\\Node\\Expr\\MethodCall' =>
  [
    'var' =>
    [
      'PhpParser\\Node\\Expr\\Array_' => true,
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\Print_' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\DNumber' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
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
  'PhpParser\\Node\\Expr\\PropertyFetch' =>
  [
    'var' =>
    [
      'PhpParser\\Node\\Expr\\Array_' => true,
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\Print_' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\DNumber' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
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
  'PhpParser\\Node\\Expr\\StaticCall' =>
  [
    'class' =>
    [
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\ClassConstFetch' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\FuncCall' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\MethodCall' => true,
      'PhpParser\\Node\\Expr\\New_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\PropertyFetch' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\StaticCall' => true,
      'PhpParser\\Node\\Expr\\StaticPropertyFetch' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
      'PhpParser\\Node\\Scalar\\String_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Class_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Dir' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\File' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Function_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Method' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Namespace_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Trait_' => true,
    ],
  ],
  'PhpParser\\Node\\Expr\\StaticPropertyFetch' =>
  [
    'class' =>
    [
      'PhpParser\\Node\\Expr\\Assign' => true,
      'PhpParser\\Node\\Expr\\AssignRef' => true,
      'PhpParser\\Node\\Expr\\BitwiseNot' => true,
      'PhpParser\\Node\\Expr\\BooleanNot' => true,
      'PhpParser\\Node\\Expr\\ClassConstFetch' => true,
      'PhpParser\\Node\\Expr\\Clone_' => true,
      'PhpParser\\Node\\Expr\\Closure' => true,
      'PhpParser\\Node\\Expr\\ClosureUse' => true,
      'PhpParser\\Node\\Expr\\Empty_' => true,
      'PhpParser\\Node\\Expr\\ErrorSuppress' => true,
      'PhpParser\\Node\\Expr\\Eval_' => true,
      'PhpParser\\Node\\Expr\\FuncCall' => true,
      'PhpParser\\Node\\Expr\\Include_' => true,
      'PhpParser\\Node\\Expr\\Instanceof_' => true,
      'PhpParser\\Node\\Expr\\Isset_' => true,
      'PhpParser\\Node\\Expr\\MethodCall' => true,
      'PhpParser\\Node\\Expr\\New_' => true,
      'PhpParser\\Node\\Expr\\PostDec' => true,
      'PhpParser\\Node\\Expr\\PostInc' => true,
      'PhpParser\\Node\\Expr\\PreDec' => true,
      'PhpParser\\Node\\Expr\\PreInc' => true,
      'PhpParser\\Node\\Expr\\PropertyFetch' => true,
      'PhpParser\\Node\\Expr\\ShellExec' => true,
      'PhpParser\\Node\\Expr\\StaticCall' => true,
      'PhpParser\\Node\\Expr\\StaticPropertyFetch' => true,
      'PhpParser\\Node\\Expr\\Ternary' => true,
      'PhpParser\\Node\\Expr\\UnaryMinus' => true,
      'PhpParser\\Node\\Expr\\UnaryPlus' => true,
      'PhpParser\\Node\\Expr\\Yield_' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Div' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\AssignOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BitwiseXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\BooleanOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Concat' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Div' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Equal' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Greater' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\GreaterOrEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Identical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalAnd' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalOr' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\LogicalXor' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Minus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mod' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Mul' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotEqual' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Plus' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Pow' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftLeft' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\ShiftRight' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\Smaller' => true,
      'PhpParser\\Node\\Expr\\BinaryOp\\SmallerOrEqual' => true,
      'PhpParser\\Node\\Expr\\Cast\\Array_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Bool_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Double' => true,
      'PhpParser\\Node\\Expr\\Cast\\Int_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Object_' => true,
      'PhpParser\\Node\\Expr\\Cast\\String_' => true,
      'PhpParser\\Node\\Expr\\Cast\\Unset_' => true,
      'PhpParser\\Node\\Scalar\\Encapsed' => true,
      'PhpParser\\Node\\Scalar\\String_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Class_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Dir' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\File' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Function_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Method' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Namespace_' => true,
      'PhpParser\\Node\\Scalar\\MagicConst\\Trait_' => true,
    ],
  ],
]
        ];
    }
}
