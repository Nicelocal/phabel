<?php

namespace Phabel\Target\Php80\ConstantReplacer;

use Phabel\ClassStorage;
use Phabel\ClassStorageProvider;
use Phabel\Tools;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\ClassConst;
use PhpParser\Node\Stmt\PropertyProperty;

/**
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
class ConstantReplacer extends ClassStorageProvider
{
    public static function processClassGraph(ClassStorage $storage, int $iteration, int $innerIteration): bool
    {
        return $iteration === 1 && $innerIteration === 1;
    }
    public function leaveParam(Param $param)
    {
        if ($param->default) {
            try {
                $param->default = Tools::fromLiteral(Tools::toLiteral($param->default));
            } catch (\Throwable $e) {
                throw $e;
                // Ignore errors caused by constant lookups
            }
        }
    }
    public function leaveProperty(PropertyProperty $property)
    {
        if ($property->default) {
            try {
                $property->default = Tools::fromLiteral(Tools::toLiteral($property->default));
            } catch (\Throwable $e) {
                throw $e;
                // Ignore errors caused by constant lookups
            }
        }
    }
    public function enterFetch(ClassConstFetch $fetch)
    {
        if (true) {
            try {
                if ($fetch->name->name === 'class' && $fetch->class instanceof Name && !$fetch->class->isSpecialClassName()) {
                    return new String_($fetch->class->toString());
                }
                return self::fromLiteral(
                    (
                        ((string) $fetch->class) === 'self'
                        ? $this->storage
                        : $this->getGlobalClassStorage()->getClassByName(self::getFqdn($fetch->class))
                    )->getConstant($fetch->name)
                );
            } catch (\Throwable $e) {
                //throw $e;
                // Ignore missing constants for now since we didn't implement normal constant lookup
            }
        }
    }
    public function enterConstant(ClassConst $constants)
    {
        foreach ($constants->consts as $const) {
            try {
                $const->value = self::fromLiteral(
                    $this->storage->getConstant($const->name)
                );
            } catch (\Throwable $e) {
                throw $e;
                // Ignore missing constants for now since we didn't implement normal constant lookup
            }
        }
    }
    public static function next(array $config): array
    {
        return [\PhpToZephir\Transforms\Stage2::class];
    }
}
