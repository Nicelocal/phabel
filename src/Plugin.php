<?php

namespace Phabel;

use Phabel\PluginGraph\PackageContext;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\NodeFinder;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard;
use ReflectionClass;

/**
 * Plugin.
 *
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
abstract class Plugin extends Tools implements PluginInterface
{
    /**
     * Configuration array.
     */
    private array $config = [];
    /**
     * Package context.
     */
    private PackageContext $ctx;
    /**
     * Set configuration array.
     *
     * @param array $config
     * @return void
     */
    public function setConfigArray(array $config): void
    {
        $this->config = $config;
    }
    /**
     * Get configuration array.
     *
     * @return array
     */
    public function getConfigArray(): array
    {
        return $this->config;
    }
    /**
     * Set package context.
     *
     * @param PackageContext $ctx Ctx
     *
     * @return void
     */
    public function setPackageContext(PackageContext $ctx): void
    {
        $this->ctx = $ctx;
    }
    /**
     * Get package context.
     *
     * @return PackageContext
     */
    public function getPackageContext(): PackageContext
    {
        return $this->ctx;
    }
    /**
     * Check if plugin should run.
     *
     * @param string $package Package name
     *
     * @return boolean
     */
    public function shouldRun(string $package): bool
    {
        return $this->ctx->has($package);
    }
    /**
     * Check if plugin should run.
     *
     * @param string $file File name
     *
     * @return boolean
     */
    public function shouldRunFile(string $file): bool
    {
        return !\str_contains($file, 'vendor/composer/');
    }
    /**
     * @var array<class-string, array<string, ClassMethod>>
     */
    private static array $polyCache = [];
    /**
     * @var array<string, ClassMethod>
     */
    public static array $usedMethods = [];
    /**
     * Call polyfill function from current plugin.
     *
     * @param string   $name          Function name
     * @param Expr|Arg ...$parameters Parameters
     *
     * @return StaticCall
     */
    protected static function callPoly(string $name, ...$parameters): StaticCall
    {
        $reflection = new ReflectionClass(static::class);
        $method = $reflection->getMethod($name);
        if (!$method->isStatic()) {
            throw new \RuntimeException('The specified method must be static!');
        }
        if (!$method->isPublic()) {
            throw new \RuntimeException('The specified method must be public!');
        }
        if (!isset(self::$polyCache[static::class])) {
            self::$polyCache[static::class] = [];
            $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
            $printer = new Standard();
            $ast = $parser->parse(\file_get_contents($reflection->getFileName()));
            $finder = new NodeFinder;
            foreach ($finder->findInstanceOf($ast, ClassMethod::class) as $method) {
                if ($method->isPublic() && $method->isStatic()) {
                    $realName = $method->name->name;
                    $method->name->name .= '_'.\hash('sha256', $printer->prettyPrint([$method]));
                    self::$polyCache[static::class][$realName] = $method;
                }
            }
        }
        $method = self::$polyCache[static::class][$name];
        $name = $method->name->name;
        self::$usedMethods[$name] = $method;
        return self::call(['PhabelPolyfill', $name], ...$parameters);
    }
    /**
     * {@inheritDoc}
     */
    public function getConfig(string $key, $default)
    {
        return $this->config[$key] ?? $default;
    }
    /**
     * {@inheritDoc}
     */
    public function setConfig(string $key, $value): void
    {
        $this->config[$key] = $value;
    }
    /**
     * {@inheritDoc}
     */
    public function hasConfig(string $key): bool
    {
        return isset($this->config[$key]);
    }
    /**
     * {@inheritDoc}
     */
    public static function mergeConfigs(array ...$configs): array
    {
        $final = [];
        foreach (\array_unique($configs, SORT_REGULAR) as $config) {
            foreach ($final as $k => $compare) {
                if (empty($intersect = \array_intersect_key($config, $compare))
                    || $intersect === \array_intersect_key($compare, $config)) {
                    $final[$k] = $config + $compare;
                    continue 2;
                }
            }
            $final []= $config;
        }
        return $final;
    }
    /**
     * {@inheritDoc}
     */
    public static function splitConfig(array $config): array
    {
        return empty($config) ? [[]] : \array_chunk($config, 1, true);
    }
    /**
     * {@inheritDoc}
     */
    public static function getComposerRequires(array $config): array
    {
        return [];
    }
    /**
     * {@inheritDoc}
     */
    public static function next(array $config): array
    {
        return [];
    }
    /**
     * {@inheritDoc}
     */
    public static function previous(array $config): array
    {
        return [];
    }
    /**
     * {@inheritDoc}
     */
    public static function withPrevious(array $config): array
    {
        return [];
    }
    /**
     * {@inheritDoc}
     */
    public static function withNext(array $config): array
    {
        return [];
    }
}
