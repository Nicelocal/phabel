<?php

namespace Phabel\Target\Php71;

use Closure;
use Phabel\Plugin;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Name;
use ReflectionClass;
use ReflectionFunction;

/**
 * Polyfills Closure::fromCallable.
 */
class ClosureFromCallable extends Plugin
{
    public function enter(StaticCall $staticCall)
    {
        if (!$staticCall->class instanceof Name || self::getFqdn($staticCall->class) !== Closure::class) {
            $phabelReturn = null;
            if (!($phabelReturn instanceof StaticCall || \is_null($phabelReturn))) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type ?StaticCall, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            }
            return $phabelReturn;
        }
        if ($staticCall->name instanceof Expr) {
            $phabelReturn = self::callPoly('proxy', $staticCall->name, ...$staticCall->args);
            if (!($phabelReturn instanceof StaticCall || \is_null($phabelReturn))) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type ?StaticCall, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            }
            return $phabelReturn;
        } elseif (\strtolower($staticCall->name->name) === 'fromcallable') {
            $phabelReturn = self::callPoly('fromCallable', $staticCall->args[0]);
            if (!($phabelReturn instanceof StaticCall || \is_null($phabelReturn))) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type ?StaticCall, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            }
            return $phabelReturn;
        }
        $phabelReturn = null;
        if (!($phabelReturn instanceof StaticCall || \is_null($phabelReturn))) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ?StaticCall, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public static function proxy(string $method, ...$args)
    {
        if (\strtolower($method) === 'fromcallable') {
            return self::fromCallable($args[0]);
        }
        return \Phabel\Target\Php71\ClosureFromCallable::proxy($method, ...$args);
    }
    /**
     * Create closure from callable.
     *
     * @param callable $callable
     * @return Closure
     */
    public static function fromCallable($callable): Closure
    {
        if ($callable instanceof Closure) {
            return $callable;
        }
        if (\Phabel\Target\Php72\Polyfill::is_object($callable)) {
            $callable = [$callable, '__invoke'];
        }
        if (\is_array($callable)) {
            $method = (new ReflectionClass($callable[0]))->getMethod($callable[1]);
            return \is_string($callable[0]) ? $method->getClosure() : $method->getClosure($callable[0]);
        }
        return (new ReflectionFunction($callable))->getClosure();
    }
}
