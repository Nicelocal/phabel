<?php

namespace PhabelTest\Target;

use PHPUnit\Framework\TestCase;

function test0callable(callable $data): callable { return $data; }
function testRet0callable($data): callable { return $data; }
function test1callable(callable $data): callable { return $data; }
function testRet1callable($data): callable { return $data; }
function test2callable(callable $data): callable { return $data; }
function testRet2callable($data): callable { return $data; }
function test3callable(callable $data): callable { return $data; }
function testRet3callable($data): callable { return $data; }
function test4array(array $data): array { return $data; }
function testRet4array($data): array { return $data; }
function test5array(array $data): array { return $data; }
function testRet5array($data): array { return $data; }
function test6bool(bool $data): bool { return $data; }
function testRet6bool($data): bool { return $data; }
function test7bool(bool $data): bool { return $data; }
function testRet7bool($data): bool { return $data; }
function test8iterable(iterable $data): iterable { return $data; }
function testRet8iterable($data): iterable { return $data; }
function test9iterable(iterable $data): iterable { return $data; }
function testRet9iterable($data): iterable { return $data; }
function test10iterable(iterable $data): iterable { return $data; }
function testRet10iterable($data): iterable { return $data; }
function test11float(float $data): float { return $data; }
function testRet11float($data): float { return $data; }
function test12float(float $data): float { return $data; }
function testRet12float($data): float { return $data; }
function test13object(object $data): object { return $data; }
function testRet13object($data): object { return $data; }
function test14object(object $data): object { return $data; }
function testRet14object($data): object { return $data; }
function test15string(string $data): string { return $data; }
function testRet15string($data): string { return $data; }
function test17int(int $data): int { return $data; }
function testRet17int($data): int { return $data; }
function test18int(int $data): int { return $data; }
function testRet18int($data): int { return $data; }
function test19PhabelTestTargetTypeHintReplacerTest(\PhabelTest\Target\TypeHintReplacerTest $data): \PhabelTest\Target\TypeHintReplacerTest { return $data; }
function testRet19PhabelTestTargetTypeHintReplacerTest($data): \PhabelTest\Target\TypeHintReplacerTest { return $data; }
function test20callable(?callable $data): ?callable { return $data; }
function testRet20callable($data): ?callable { return $data; }
function test21callable(?callable $data): ?callable { return $data; }
function testRet21callable($data): ?callable { return $data; }
function test22callable(?callable $data): ?callable { return $data; }
function testRet22callable($data): ?callable { return $data; }
function test23callable(?callable $data): ?callable { return $data; }
function testRet23callable($data): ?callable { return $data; }
function test24callable(?callable $data): ?callable { return $data; }
function testRet24callable($data): ?callable { return $data; }
function test25callablearray(callable|array $data): callable|array { return $data; }
function testRet25callablearray($data): callable|array { return $data; }
function test26callablearray(callable|array $data): callable|array { return $data; }
function testRet26callablearray($data): callable|array { return $data; }
function test27callablearray(callable|array $data): callable|array { return $data; }
function testRet27callablearray($data): callable|array { return $data; }
function test28callablearray(callable|array $data): callable|array { return $data; }
function testRet28callablearray($data): callable|array { return $data; }
function test29callablearray(callable|array $data): callable|array { return $data; }
function testRet29callablearray($data): callable|array { return $data; }
function test30callablearray(callable|array $data): callable|array { return $data; }
function testRet30callablearray($data): callable|array { return $data; }
function test31array(?array $data): ?array { return $data; }
function testRet31array($data): ?array { return $data; }
function test32array(?array $data): ?array { return $data; }
function testRet32array($data): ?array { return $data; }
function test33array(?array $data): ?array { return $data; }
function testRet33array($data): ?array { return $data; }
function test34arraybool(array|bool $data): array|bool { return $data; }
function testRet34arraybool($data): array|bool { return $data; }
function test35arraybool(array|bool $data): array|bool { return $data; }
function testRet35arraybool($data): array|bool { return $data; }
function test36arraybool(array|bool $data): array|bool { return $data; }
function testRet36arraybool($data): array|bool { return $data; }
function test37arraybool(array|bool $data): array|bool { return $data; }
function testRet37arraybool($data): array|bool { return $data; }
function test38bool(?bool $data): ?bool { return $data; }
function testRet38bool($data): ?bool { return $data; }
function test39bool(?bool $data): ?bool { return $data; }
function testRet39bool($data): ?bool { return $data; }
function test40bool(?bool $data): ?bool { return $data; }
function testRet40bool($data): ?bool { return $data; }
function test41booliterable(bool|iterable $data): bool|iterable { return $data; }
function testRet41booliterable($data): bool|iterable { return $data; }
function test42booliterable(bool|iterable $data): bool|iterable { return $data; }
function testRet42booliterable($data): bool|iterable { return $data; }
function test43booliterable(bool|iterable $data): bool|iterable { return $data; }
function testRet43booliterable($data): bool|iterable { return $data; }
function test44booliterable(bool|iterable $data): bool|iterable { return $data; }
function testRet44booliterable($data): bool|iterable { return $data; }
function test45booliterable(bool|iterable $data): bool|iterable { return $data; }
function testRet45booliterable($data): bool|iterable { return $data; }
function test46iterable(?iterable $data): ?iterable { return $data; }
function testRet46iterable($data): ?iterable { return $data; }
function test47iterable(?iterable $data): ?iterable { return $data; }
function testRet47iterable($data): ?iterable { return $data; }
function test48iterable(?iterable $data): ?iterable { return $data; }
function testRet48iterable($data): ?iterable { return $data; }
function test49iterable(?iterable $data): ?iterable { return $data; }
function testRet49iterable($data): ?iterable { return $data; }
function test50iterablefloat(iterable|float $data): iterable|float { return $data; }
function testRet50iterablefloat($data): iterable|float { return $data; }
function test51iterablefloat(iterable|float $data): iterable|float { return $data; }
function testRet51iterablefloat($data): iterable|float { return $data; }
function test52iterablefloat(iterable|float $data): iterable|float { return $data; }
function testRet52iterablefloat($data): iterable|float { return $data; }
function test53iterablefloat(iterable|float $data): iterable|float { return $data; }
function testRet53iterablefloat($data): iterable|float { return $data; }
function test54iterablefloat(iterable|float $data): iterable|float { return $data; }
function testRet54iterablefloat($data): iterable|float { return $data; }
function test55float(?float $data): ?float { return $data; }
function testRet55float($data): ?float { return $data; }
function test56float(?float $data): ?float { return $data; }
function testRet56float($data): ?float { return $data; }
function test57float(?float $data): ?float { return $data; }
function testRet57float($data): ?float { return $data; }
function test58floatobject(float|object $data): float|object { return $data; }
function testRet58floatobject($data): float|object { return $data; }
function test59floatobject(float|object $data): float|object { return $data; }
function testRet59floatobject($data): float|object { return $data; }
function test60floatobject(float|object $data): float|object { return $data; }
function testRet60floatobject($data): float|object { return $data; }
function test61floatobject(float|object $data): float|object { return $data; }
function testRet61floatobject($data): float|object { return $data; }
function test62object(?object $data): ?object { return $data; }
function testRet62object($data): ?object { return $data; }
function test63object(?object $data): ?object { return $data; }
function testRet63object($data): ?object { return $data; }
function test64object(?object $data): ?object { return $data; }
function testRet64object($data): ?object { return $data; }
function test65objectstring(object|string $data): object|string { return $data; }
function testRet65objectstring($data): object|string { return $data; }
function test66objectstring(object|string $data): object|string { return $data; }
function testRet66objectstring($data): object|string { return $data; }
function test67objectstring(object|string $data): object|string { return $data; }
function testRet67objectstring($data): object|string { return $data; }
function test68string(?string $data): ?string { return $data; }
function testRet68string($data): ?string { return $data; }
function test69string(?string $data): ?string { return $data; }
function testRet69string($data): ?string { return $data; }
function test72int(?int $data): ?int { return $data; }
function testRet72int($data): ?int { return $data; }
function test73int(?int $data): ?int { return $data; }
function testRet73int($data): ?int { return $data; }
function test74int(?int $data): ?int { return $data; }
function testRet74int($data): ?int { return $data; }
function test75intPhabelTestTargetTypeHintReplacerTest(int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function testRet75intPhabelTestTargetTypeHintReplacerTest($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function test76intPhabelTestTargetTypeHintReplacerTest(int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function testRet76intPhabelTestTargetTypeHintReplacerTest($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function test77intPhabelTestTargetTypeHintReplacerTest(int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function testRet77intPhabelTestTargetTypeHintReplacerTest($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function test78PhabelTestTargetTypeHintReplacerTest(?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function testRet78PhabelTestTargetTypeHintReplacerTest($data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function test79PhabelTestTargetTypeHintReplacerTest(?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function testRet79PhabelTestTargetTypeHintReplacerTest($data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
function test80PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function testRet80PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function test81PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function testRet81PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function test82PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function testRet82PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function test83PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function testRet83PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function test84PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
function testRet84PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }


/**
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
class TypeHintReplacerTest extends TestCase
{
    /**
     * @dataProvider returnDataProvider
     */
    public function testRet(callable $c, $data, $wrongData, string $exception) {
        $this->assertEquals($data, $c($data));

        $this->expectExceptionMessageMatches($exception);
        $c($wrongData);
    }
    public function returnDataProvider(): array
    {
        return [
[fn ($data): callable => $data, "is_null", new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[function ($data): callable { return $data; }, "is_null", new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[$this, 'testRet0callable'], "is_null", new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[self::class, 'testRet0callable'], "is_null", new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
['PhabelTest\Target\testRet0callable', "is_null", new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[fn ($data): callable => $data, fn (): int => 0, new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[function ($data): callable { return $data; }, fn (): int => 0, new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[$this, 'testRet1callable'], fn (): int => 0, new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[self::class, 'testRet1callable'], fn (): int => 0, new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
['PhabelTest\Target\testRet1callable', fn (): int => 0, new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[fn ($data): callable => $data, [$this, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[function ($data): callable { return $data; }, [$this, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[$this, 'testRet2callable'], [$this, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[self::class, 'testRet2callable'], [$this, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
['PhabelTest\Target\testRet2callable', [$this, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[fn ($data): callable => $data, [self::class, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[function ($data): callable { return $data; }, [self::class, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[$this, 'testRet3callable'], [self::class, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[[self::class, 'testRet3callable'], [self::class, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
['PhabelTest\Target\testRet3callable', [self::class, "noop"], new class{}, '~.*Return value must be of type callable, class@anonymous returned~'],
[fn ($data): array => $data, ['lmao'], new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[function ($data): array { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[[$this, 'testRet4array'], ['lmao'], new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[[self::class, 'testRet4array'], ['lmao'], new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
['PhabelTest\Target\testRet4array', ['lmao'], new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[fn ($data): array => $data, array(), new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[function ($data): array { return $data; }, array(), new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[[$this, 'testRet5array'], array(), new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[[self::class, 'testRet5array'], array(), new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
['PhabelTest\Target\testRet5array', array(), new class{}, '~.*Return value must be of type array, class@anonymous returned~'],
[fn ($data): bool => $data, true, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[function ($data): bool { return $data; }, true, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[[$this, 'testRet6bool'], true, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[[self::class, 'testRet6bool'], true, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
['PhabelTest\Target\testRet6bool', true, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[fn ($data): bool => $data, false, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[function ($data): bool { return $data; }, false, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[[$this, 'testRet7bool'], false, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[[self::class, 'testRet7bool'], false, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
['PhabelTest\Target\testRet7bool', false, new class{}, '~.*Return value must be of type bool, class@anonymous returned~'],
[fn ($data): iterable => $data, ['lmao'], new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[function ($data): iterable { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[[$this, 'testRet8iterable'], ['lmao'], new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[[self::class, 'testRet8iterable'], ['lmao'], new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet8iterable', ['lmao'], new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[fn ($data): iterable => $data, array(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[function ($data): iterable { return $data; }, array(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[[$this, 'testRet9iterable'], array(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[[self::class, 'testRet9iterable'], array(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet9iterable', array(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[fn ($data): iterable => $data, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[function ($data): iterable { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[[$this, 'testRet10iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[[self::class, 'testRet10iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet10iterable', (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable, class@anonymous returned~'],
[fn ($data): float => $data, 123.123, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[function ($data): float { return $data; }, 123.123, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[[$this, 'testRet11float'], 123.123, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[[self::class, 'testRet11float'], 123.123, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
['PhabelTest\Target\testRet11float', 123.123, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[fn ($data): float => $data, 1e3, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[function ($data): float { return $data; }, 1e3, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[[$this, 'testRet12float'], 1e3, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[[self::class, 'testRet12float'], 1e3, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
['PhabelTest\Target\testRet12float', 1e3, new class{}, '~.*Return value must be of type float, class@anonymous returned~'],
[fn ($data): object => $data, new class{}, 0, '~.*Return value must be of type object, int returned~'],
[function ($data): object { return $data; }, new class{}, 0, '~.*Return value must be of type object, int returned~'],
[[$this, 'testRet13object'], new class{}, 0, '~.*Return value must be of type object, int returned~'],
[[self::class, 'testRet13object'], new class{}, 0, '~.*Return value must be of type object, int returned~'],
['PhabelTest\Target\testRet13object', new class{}, 0, '~.*Return value must be of type object, int returned~'],
[fn ($data): object => $data, $this, 0, '~.*Return value must be of type object, int returned~'],
[function ($data): object { return $data; }, $this, 0, '~.*Return value must be of type object, int returned~'],
[[$this, 'testRet14object'], $this, 0, '~.*Return value must be of type object, int returned~'],
[[self::class, 'testRet14object'], $this, 0, '~.*Return value must be of type object, int returned~'],
['PhabelTest\Target\testRet14object', $this, 0, '~.*Return value must be of type object, int returned~'],
[fn ($data): string => $data, 'lmao', new class{}, '~.*Return value must be of type string, class@anonymous returned~'],
[function ($data): string { return $data; }, 'lmao', new class{}, '~.*Return value must be of type string, class@anonymous returned~'],
[[$this, 'testRet15string'], 'lmao', new class{}, '~.*Return value must be of type string, class@anonymous returned~'],
[[self::class, 'testRet15string'], 'lmao', new class{}, '~.*Return value must be of type string, class@anonymous returned~'],
['PhabelTest\Target\testRet15string', 'lmao', new class{}, '~.*Return value must be of type string, class@anonymous returned~'],
[fn ($data): self => $data, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[function ($data): self { return $data; }, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[$this, 'testRet16self'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[self::class, 'testRet16self'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[fn ($data): int => $data, 123, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[function ($data): int { return $data; }, 123, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[[$this, 'testRet17int'], 123, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[[self::class, 'testRet17int'], 123, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
['PhabelTest\Target\testRet17int', 123, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[fn ($data): int => $data, -1, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[function ($data): int { return $data; }, -1, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[[$this, 'testRet18int'], -1, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[[self::class, 'testRet18int'], -1, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
['PhabelTest\Target\testRet18int', -1, new class{}, '~.*Return value must be of type int, class@anonymous returned~'],
[fn ($data): \PhabelTest\Target\TypeHintReplacerTest => $data, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[function ($data): \PhabelTest\Target\TypeHintReplacerTest { return $data; }, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[$this, 'testRet19PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[self::class, 'testRet19PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
['PhabelTest\Target\testRet19PhabelTestTargetTypeHintReplacerTest', $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[fn ($data): ?callable => $data, "is_null", new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[function ($data): ?callable { return $data; }, "is_null", new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[$this, 'testRet20callable'], "is_null", new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[self::class, 'testRet20callable'], "is_null", new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
['PhabelTest\Target\testRet20callable', "is_null", new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[fn ($data): ?callable => $data, fn (): int => 0, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[function ($data): ?callable { return $data; }, fn (): int => 0, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[$this, 'testRet21callable'], fn (): int => 0, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[self::class, 'testRet21callable'], fn (): int => 0, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
['PhabelTest\Target\testRet21callable', fn (): int => 0, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[fn ($data): ?callable => $data, [$this, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[function ($data): ?callable { return $data; }, [$this, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[$this, 'testRet22callable'], [$this, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[self::class, 'testRet22callable'], [$this, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
['PhabelTest\Target\testRet22callable', [$this, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[fn ($data): ?callable => $data, [self::class, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[function ($data): ?callable { return $data; }, [self::class, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[$this, 'testRet23callable'], [self::class, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[self::class, 'testRet23callable'], [self::class, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
['PhabelTest\Target\testRet23callable', [self::class, "noop"], new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[fn ($data): ?callable => $data, null, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[function ($data): ?callable { return $data; }, null, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[$this, 'testRet24callable'], null, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[[self::class, 'testRet24callable'], null, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
['PhabelTest\Target\testRet24callable', null, new class{}, '~.*Return value must be of type \\?callable, class@anonymous returned~'],
[fn ($data): callable|array => $data, "is_null", new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[function ($data): callable|array { return $data; }, "is_null", new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[$this, 'testRet25callablearray'], "is_null", new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[self::class, 'testRet25callablearray'], "is_null", new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
['PhabelTest\Target\testRet25callablearray', "is_null", new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[fn ($data): callable|array => $data, fn (): int => 0, new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[function ($data): callable|array { return $data; }, fn (): int => 0, new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[$this, 'testRet26callablearray'], fn (): int => 0, new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[self::class, 'testRet26callablearray'], fn (): int => 0, new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
['PhabelTest\Target\testRet26callablearray', fn (): int => 0, new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[fn ($data): callable|array => $data, [$this, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[function ($data): callable|array { return $data; }, [$this, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[$this, 'testRet27callablearray'], [$this, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[self::class, 'testRet27callablearray'], [$this, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
['PhabelTest\Target\testRet27callablearray', [$this, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[fn ($data): callable|array => $data, [self::class, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[function ($data): callable|array { return $data; }, [self::class, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[$this, 'testRet28callablearray'], [self::class, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[self::class, 'testRet28callablearray'], [self::class, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
['PhabelTest\Target\testRet28callablearray', [self::class, "noop"], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[fn ($data): callable|array => $data, ['lmao'], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[function ($data): callable|array { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[$this, 'testRet29callablearray'], ['lmao'], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[self::class, 'testRet29callablearray'], ['lmao'], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
['PhabelTest\Target\testRet29callablearray', ['lmao'], new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[fn ($data): callable|array => $data, array(), new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[function ($data): callable|array { return $data; }, array(), new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[$this, 'testRet30callablearray'], array(), new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[[self::class, 'testRet30callablearray'], array(), new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
['PhabelTest\Target\testRet30callablearray', array(), new class{}, '~.*Return value must be of type callable|array, class@anonymous returned~'],
[fn ($data): ?array => $data, ['lmao'], new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[function ($data): ?array { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[[$this, 'testRet31array'], ['lmao'], new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[[self::class, 'testRet31array'], ['lmao'], new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
['PhabelTest\Target\testRet31array', ['lmao'], new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[fn ($data): ?array => $data, array(), new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[function ($data): ?array { return $data; }, array(), new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[[$this, 'testRet32array'], array(), new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[[self::class, 'testRet32array'], array(), new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
['PhabelTest\Target\testRet32array', array(), new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[fn ($data): ?array => $data, null, new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[function ($data): ?array { return $data; }, null, new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[[$this, 'testRet33array'], null, new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[[self::class, 'testRet33array'], null, new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
['PhabelTest\Target\testRet33array', null, new class{}, '~.*Return value must be of type \\?array, class@anonymous returned~'],
[fn ($data): array|bool => $data, ['lmao'], new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[function ($data): array|bool { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[$this, 'testRet34arraybool'], ['lmao'], new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[self::class, 'testRet34arraybool'], ['lmao'], new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet34arraybool', ['lmao'], new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[fn ($data): array|bool => $data, array(), new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[function ($data): array|bool { return $data; }, array(), new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[$this, 'testRet35arraybool'], array(), new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[self::class, 'testRet35arraybool'], array(), new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet35arraybool', array(), new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[fn ($data): array|bool => $data, true, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[function ($data): array|bool { return $data; }, true, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[$this, 'testRet36arraybool'], true, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[self::class, 'testRet36arraybool'], true, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet36arraybool', true, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[fn ($data): array|bool => $data, false, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[function ($data): array|bool { return $data; }, false, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[$this, 'testRet37arraybool'], false, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[[self::class, 'testRet37arraybool'], false, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet37arraybool', false, new class{}, '~.*Return value must be of type array|bool, class@anonymous returned~'],
[fn ($data): ?bool => $data, true, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[function ($data): ?bool { return $data; }, true, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[[$this, 'testRet38bool'], true, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[[self::class, 'testRet38bool'], true, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
['PhabelTest\Target\testRet38bool', true, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[fn ($data): ?bool => $data, false, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[function ($data): ?bool { return $data; }, false, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[[$this, 'testRet39bool'], false, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[[self::class, 'testRet39bool'], false, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
['PhabelTest\Target\testRet39bool', false, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[fn ($data): ?bool => $data, null, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[function ($data): ?bool { return $data; }, null, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[[$this, 'testRet40bool'], null, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[[self::class, 'testRet40bool'], null, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
['PhabelTest\Target\testRet40bool', null, new class{}, '~.*Return value must be of type \\?bool, class@anonymous returned~'],
[fn ($data): bool|iterable => $data, true, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[function ($data): bool|iterable { return $data; }, true, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[$this, 'testRet41booliterable'], true, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[self::class, 'testRet41booliterable'], true, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet41booliterable', true, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[fn ($data): bool|iterable => $data, false, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[function ($data): bool|iterable { return $data; }, false, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[$this, 'testRet42booliterable'], false, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[self::class, 'testRet42booliterable'], false, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet42booliterable', false, new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[fn ($data): bool|iterable => $data, ['lmao'], new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[function ($data): bool|iterable { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[$this, 'testRet43booliterable'], ['lmao'], new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[self::class, 'testRet43booliterable'], ['lmao'], new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet43booliterable', ['lmao'], new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[fn ($data): bool|iterable => $data, array(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[function ($data): bool|iterable { return $data; }, array(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[$this, 'testRet44booliterable'], array(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[self::class, 'testRet44booliterable'], array(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet44booliterable', array(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[fn ($data): bool|iterable => $data, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[function ($data): bool|iterable { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[$this, 'testRet45booliterable'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[[self::class, 'testRet45booliterable'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
['PhabelTest\Target\testRet45booliterable', (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|bool, class@anonymous returned~'],
[fn ($data): ?iterable => $data, ['lmao'], new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[function ($data): ?iterable { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[$this, 'testRet46iterable'], ['lmao'], new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[self::class, 'testRet46iterable'], ['lmao'], new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet46iterable', ['lmao'], new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[fn ($data): ?iterable => $data, array(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[function ($data): ?iterable { return $data; }, array(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[$this, 'testRet47iterable'], array(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[self::class, 'testRet47iterable'], array(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet47iterable', array(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[fn ($data): ?iterable => $data, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[function ($data): ?iterable { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[$this, 'testRet48iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[self::class, 'testRet48iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet48iterable', (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[fn ($data): ?iterable => $data, null, new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[function ($data): ?iterable { return $data; }, null, new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[$this, 'testRet49iterable'], null, new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[[self::class, 'testRet49iterable'], null, new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
['PhabelTest\Target\testRet49iterable', null, new class{}, '~.*Return value must be of type \\?iterable, class@anonymous returned~'],
[fn ($data): iterable|float => $data, ['lmao'], new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[function ($data): iterable|float { return $data; }, ['lmao'], new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[$this, 'testRet50iterablefloat'], ['lmao'], new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[self::class, 'testRet50iterablefloat'], ['lmao'], new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
['PhabelTest\Target\testRet50iterablefloat', ['lmao'], new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[fn ($data): iterable|float => $data, array(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[function ($data): iterable|float { return $data; }, array(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[$this, 'testRet51iterablefloat'], array(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[self::class, 'testRet51iterablefloat'], array(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
['PhabelTest\Target\testRet51iterablefloat', array(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[fn ($data): iterable|float => $data, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[function ($data): iterable|float { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[$this, 'testRet52iterablefloat'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[self::class, 'testRet52iterablefloat'], (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
['PhabelTest\Target\testRet52iterablefloat', (fn (): \Generator => yield)(), new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[fn ($data): iterable|float => $data, 123.123, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[function ($data): iterable|float { return $data; }, 123.123, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[$this, 'testRet53iterablefloat'], 123.123, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[self::class, 'testRet53iterablefloat'], 123.123, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
['PhabelTest\Target\testRet53iterablefloat', 123.123, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[fn ($data): iterable|float => $data, 1e3, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[function ($data): iterable|float { return $data; }, 1e3, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[$this, 'testRet54iterablefloat'], 1e3, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[[self::class, 'testRet54iterablefloat'], 1e3, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
['PhabelTest\Target\testRet54iterablefloat', 1e3, new class{}, '~.*Return value must be of type iterable|float, class@anonymous returned~'],
[fn ($data): ?float => $data, 123.123, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[function ($data): ?float { return $data; }, 123.123, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[[$this, 'testRet55float'], 123.123, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[[self::class, 'testRet55float'], 123.123, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
['PhabelTest\Target\testRet55float', 123.123, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[fn ($data): ?float => $data, 1e3, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[function ($data): ?float { return $data; }, 1e3, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[[$this, 'testRet56float'], 1e3, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[[self::class, 'testRet56float'], 1e3, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
['PhabelTest\Target\testRet56float', 1e3, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[fn ($data): ?float => $data, null, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[function ($data): ?float { return $data; }, null, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[[$this, 'testRet57float'], null, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[[self::class, 'testRet57float'], null, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
['PhabelTest\Target\testRet57float', null, new class{}, '~.*Return value must be of type \\?float, class@anonymous returned~'],
[fn ($data): float|object => $data, 123.123, null, '~.*Return value must be of type object|float, null returned~'],
[function ($data): float|object { return $data; }, 123.123, null, '~.*Return value must be of type object|float, null returned~'],
[[$this, 'testRet58floatobject'], 123.123, null, '~.*Return value must be of type object|float, null returned~'],
[[self::class, 'testRet58floatobject'], 123.123, null, '~.*Return value must be of type object|float, null returned~'],
['PhabelTest\Target\testRet58floatobject', 123.123, null, '~.*Return value must be of type object|float, null returned~'],
[fn ($data): float|object => $data, 1e3, null, '~.*Return value must be of type object|float, null returned~'],
[function ($data): float|object { return $data; }, 1e3, null, '~.*Return value must be of type object|float, null returned~'],
[[$this, 'testRet59floatobject'], 1e3, null, '~.*Return value must be of type object|float, null returned~'],
[[self::class, 'testRet59floatobject'], 1e3, null, '~.*Return value must be of type object|float, null returned~'],
['PhabelTest\Target\testRet59floatobject', 1e3, null, '~.*Return value must be of type object|float, null returned~'],
[fn ($data): float|object => $data, new class{}, null, '~.*Return value must be of type object|float, null returned~'],
[function ($data): float|object { return $data; }, new class{}, null, '~.*Return value must be of type object|float, null returned~'],
[[$this, 'testRet60floatobject'], new class{}, null, '~.*Return value must be of type object|float, null returned~'],
[[self::class, 'testRet60floatobject'], new class{}, null, '~.*Return value must be of type object|float, null returned~'],
['PhabelTest\Target\testRet60floatobject', new class{}, null, '~.*Return value must be of type object|float, null returned~'],
[fn ($data): float|object => $data, $this, null, '~.*Return value must be of type object|float, null returned~'],
[function ($data): float|object { return $data; }, $this, null, '~.*Return value must be of type object|float, null returned~'],
[[$this, 'testRet61floatobject'], $this, null, '~.*Return value must be of type object|float, null returned~'],
[[self::class, 'testRet61floatobject'], $this, null, '~.*Return value must be of type object|float, null returned~'],
['PhabelTest\Target\testRet61floatobject', $this, null, '~.*Return value must be of type object|float, null returned~'],
[fn ($data): ?object => $data, new class{}, 0, '~.*Return value must be of type \\?object, int returned~'],
[function ($data): ?object { return $data; }, new class{}, 0, '~.*Return value must be of type \\?object, int returned~'],
[[$this, 'testRet62object'], new class{}, 0, '~.*Return value must be of type \\?object, int returned~'],
[[self::class, 'testRet62object'], new class{}, 0, '~.*Return value must be of type \\?object, int returned~'],
['PhabelTest\Target\testRet62object', new class{}, 0, '~.*Return value must be of type \\?object, int returned~'],
[fn ($data): ?object => $data, $this, 0, '~.*Return value must be of type \\?object, int returned~'],
[function ($data): ?object { return $data; }, $this, 0, '~.*Return value must be of type \\?object, int returned~'],
[[$this, 'testRet63object'], $this, 0, '~.*Return value must be of type \\?object, int returned~'],
[[self::class, 'testRet63object'], $this, 0, '~.*Return value must be of type \\?object, int returned~'],
['PhabelTest\Target\testRet63object', $this, 0, '~.*Return value must be of type \\?object, int returned~'],
[fn ($data): ?object => $data, null, 0, '~.*Return value must be of type \\?object, int returned~'],
[function ($data): ?object { return $data; }, null, 0, '~.*Return value must be of type \\?object, int returned~'],
[[$this, 'testRet64object'], null, 0, '~.*Return value must be of type \\?object, int returned~'],
[[self::class, 'testRet64object'], null, 0, '~.*Return value must be of type \\?object, int returned~'],
['PhabelTest\Target\testRet64object', null, 0, '~.*Return value must be of type \\?object, int returned~'],
[fn ($data): object|string => $data, new class{}, null, '~.*Return value must be of type object|string, null returned~'],
[function ($data): object|string { return $data; }, new class{}, null, '~.*Return value must be of type object|string, null returned~'],
[[$this, 'testRet65objectstring'], new class{}, null, '~.*Return value must be of type object|string, null returned~'],
[[self::class, 'testRet65objectstring'], new class{}, null, '~.*Return value must be of type object|string, null returned~'],
['PhabelTest\Target\testRet65objectstring', new class{}, null, '~.*Return value must be of type object|string, null returned~'],
[fn ($data): object|string => $data, $this, null, '~.*Return value must be of type object|string, null returned~'],
[function ($data): object|string { return $data; }, $this, null, '~.*Return value must be of type object|string, null returned~'],
[[$this, 'testRet66objectstring'], $this, null, '~.*Return value must be of type object|string, null returned~'],
[[self::class, 'testRet66objectstring'], $this, null, '~.*Return value must be of type object|string, null returned~'],
['PhabelTest\Target\testRet66objectstring', $this, null, '~.*Return value must be of type object|string, null returned~'],
[fn ($data): object|string => $data, 'lmao', null, '~.*Return value must be of type object|string, null returned~'],
[function ($data): object|string { return $data; }, 'lmao', null, '~.*Return value must be of type object|string, null returned~'],
[[$this, 'testRet67objectstring'], 'lmao', null, '~.*Return value must be of type object|string, null returned~'],
[[self::class, 'testRet67objectstring'], 'lmao', null, '~.*Return value must be of type object|string, null returned~'],
['PhabelTest\Target\testRet67objectstring', 'lmao', null, '~.*Return value must be of type object|string, null returned~'],
[fn ($data): ?string => $data, 'lmao', new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[function ($data): ?string { return $data; }, 'lmao', new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[[$this, 'testRet68string'], 'lmao', new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[[self::class, 'testRet68string'], 'lmao', new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
['PhabelTest\Target\testRet68string', 'lmao', new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[fn ($data): ?string => $data, null, new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[function ($data): ?string { return $data; }, null, new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[[$this, 'testRet69string'], null, new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[[self::class, 'testRet69string'], null, new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
['PhabelTest\Target\testRet69string', null, new class{}, '~.*Return value must be of type \\?string, class@anonymous returned~'],
[fn ($data): ?self => $data, $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[function ($data): ?self { return $data; }, $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[$this, 'testRet70self'], $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[self::class, 'testRet70self'], $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[fn ($data): ?self => $data, null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[function ($data): ?self { return $data; }, null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[$this, 'testRet71self'], null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[self::class, 'testRet71self'], null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[fn ($data): ?int => $data, 123, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[function ($data): ?int { return $data; }, 123, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[[$this, 'testRet72int'], 123, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[[self::class, 'testRet72int'], 123, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
['PhabelTest\Target\testRet72int', 123, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[fn ($data): ?int => $data, -1, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[function ($data): ?int { return $data; }, -1, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[[$this, 'testRet73int'], -1, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[[self::class, 'testRet73int'], -1, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
['PhabelTest\Target\testRet73int', -1, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[fn ($data): ?int => $data, null, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[function ($data): ?int { return $data; }, null, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[[$this, 'testRet74int'], null, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[[self::class, 'testRet74int'], null, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
['PhabelTest\Target\testRet74int', null, new class{}, '~.*Return value must be of type \\?int, class@anonymous returned~'],
[fn ($data): int|\PhabelTest\Target\TypeHintReplacerTest => $data, 123, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[function ($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }, 123, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[[$this, 'testRet75intPhabelTestTargetTypeHintReplacerTest'], 123, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[[self::class, 'testRet75intPhabelTestTargetTypeHintReplacerTest'], 123, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
['PhabelTest\Target\testRet75intPhabelTestTargetTypeHintReplacerTest', 123, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[fn ($data): int|\PhabelTest\Target\TypeHintReplacerTest => $data, -1, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[function ($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }, -1, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[[$this, 'testRet76intPhabelTestTargetTypeHintReplacerTest'], -1, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[[self::class, 'testRet76intPhabelTestTargetTypeHintReplacerTest'], -1, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
['PhabelTest\Target\testRet76intPhabelTestTargetTypeHintReplacerTest', -1, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[fn ($data): int|\PhabelTest\Target\TypeHintReplacerTest => $data, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[function ($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[[$this, 'testRet77intPhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[[self::class, 'testRet77intPhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
['PhabelTest\Target\testRet77intPhabelTestTargetTypeHintReplacerTest', $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous returned~'],
[fn ($data): ?\PhabelTest\Target\TypeHintReplacerTest => $data, $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[function ($data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }, $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[$this, 'testRet78PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[self::class, 'testRet78PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
['PhabelTest\Target\testRet78PhabelTestTargetTypeHintReplacerTest', $this, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[fn ($data): ?\PhabelTest\Target\TypeHintReplacerTest => $data, null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[function ($data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }, null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[$this, 'testRet79PhabelTestTargetTypeHintReplacerTest'], null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[[self::class, 'testRet79PhabelTestTargetTypeHintReplacerTest'], null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
['PhabelTest\Target\testRet79PhabelTestTargetTypeHintReplacerTest', null, new class{}, '~.*Return value must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous returned~'],
[fn ($data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[function ($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[$this, 'testRet80PhabelTestTargetTypeHintReplacerTestcallable'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[self::class, 'testRet80PhabelTestTargetTypeHintReplacerTestcallable'], $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
['PhabelTest\Target\testRet80PhabelTestTargetTypeHintReplacerTestcallable', $this, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[fn ($data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, "is_null", new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[function ($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, "is_null", new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[$this, 'testRet81PhabelTestTargetTypeHintReplacerTestcallable'], "is_null", new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[self::class, 'testRet81PhabelTestTargetTypeHintReplacerTestcallable'], "is_null", new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
['PhabelTest\Target\testRet81PhabelTestTargetTypeHintReplacerTestcallable', "is_null", new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[fn ($data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, fn (): int => 0, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[function ($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, fn (): int => 0, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[$this, 'testRet82PhabelTestTargetTypeHintReplacerTestcallable'], fn (): int => 0, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[self::class, 'testRet82PhabelTestTargetTypeHintReplacerTestcallable'], fn (): int => 0, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
['PhabelTest\Target\testRet82PhabelTestTargetTypeHintReplacerTestcallable', fn (): int => 0, new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[fn ($data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, [$this, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[function ($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, [$this, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[$this, 'testRet83PhabelTestTargetTypeHintReplacerTestcallable'], [$this, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[self::class, 'testRet83PhabelTestTargetTypeHintReplacerTestcallable'], [$this, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
['PhabelTest\Target\testRet83PhabelTestTargetTypeHintReplacerTestcallable', [$this, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[fn ($data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, [self::class, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[function ($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, [self::class, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[$this, 'testRet84PhabelTestTargetTypeHintReplacerTestcallable'], [self::class, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
[[self::class, 'testRet84PhabelTestTargetTypeHintReplacerTestcallable'], [self::class, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~'],
['PhabelTest\Target\testRet84PhabelTestTargetTypeHintReplacerTestcallable', [self::class, "noop"], new class{}, '~.*Return value must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous returned~']];
;
    }
    /**
     * @dataProvider paramDataProvider
     */
    public function test(callable $c, $data, $wrongData, string $exception) {
        $this->assertEquals($data, $c($data));

        $this->expectExceptionMessageMatches($exception);
        $c($wrongData);
    }
    public function paramDataProvider(): array
    {
        return [
[fn (callable $data): callable => $data, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[function (callable $data): callable { return $data; }, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[$this, 'test0callable'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[self::class, 'test0callable'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
['PhabelTest\Target\test0callable', "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[fn (callable $data): callable => $data, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[function (callable $data): callable { return $data; }, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[$this, 'test1callable'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[self::class, 'test1callable'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
['PhabelTest\Target\test1callable', fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[fn (callable $data): callable => $data, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[function (callable $data): callable { return $data; }, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[$this, 'test2callable'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[self::class, 'test2callable'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
['PhabelTest\Target\test2callable', [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[fn (callable $data): callable => $data, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[function (callable $data): callable { return $data; }, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[$this, 'test3callable'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[[self::class, 'test3callable'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
['PhabelTest\Target\test3callable', [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable, class@anonymous given, .*~'],
[fn (array $data): array => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[function (array $data): array { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[[$this, 'test4array'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[[self::class, 'test4array'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
['PhabelTest\Target\test4array', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[fn (array $data): array => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[function (array $data): array { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[[$this, 'test5array'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[[self::class, 'test5array'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
['PhabelTest\Target\test5array', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array, class@anonymous given, .*~'],
[fn (bool $data): bool => $data, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[function (bool $data): bool { return $data; }, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[[$this, 'test6bool'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[[self::class, 'test6bool'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
['PhabelTest\Target\test6bool', true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[fn (bool $data): bool => $data, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[function (bool $data): bool { return $data; }, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[[$this, 'test7bool'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[[self::class, 'test7bool'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
['PhabelTest\Target\test7bool', false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type bool, class@anonymous given, .*~'],
[fn (iterable $data): iterable => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[function (iterable $data): iterable { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[[$this, 'test8iterable'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[[self::class, 'test8iterable'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test8iterable', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[fn (iterable $data): iterable => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[function (iterable $data): iterable { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[[$this, 'test9iterable'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[[self::class, 'test9iterable'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test9iterable', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[fn (iterable $data): iterable => $data, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[function (iterable $data): iterable { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[[$this, 'test10iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[[self::class, 'test10iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test10iterable', (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable, class@anonymous given, .*~'],
[fn (float $data): float => $data, 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[function (float $data): float { return $data; }, 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[[$this, 'test11float'], 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[[self::class, 'test11float'], 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
['PhabelTest\Target\test11float', 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[fn (float $data): float => $data, 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[function (float $data): float { return $data; }, 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[[$this, 'test12float'], 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[[self::class, 'test12float'], 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
['PhabelTest\Target\test12float', 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type float, class@anonymous given, .*~'],
[fn (object $data): object => $data, new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[function (object $data): object { return $data; }, new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[[$this, 'test13object'], new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[[self::class, 'test13object'], new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
['PhabelTest\Target\test13object', new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[fn (object $data): object => $data, $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[function (object $data): object { return $data; }, $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[[$this, 'test14object'], $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[[self::class, 'test14object'], $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
['PhabelTest\Target\test14object', $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type object, int given, .*~'],
[fn (string $data): string => $data, 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type string, class@anonymous given, .*~'],
[function (string $data): string { return $data; }, 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type string, class@anonymous given, .*~'],
[[$this, 'test15string'], 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type string, class@anonymous given, .*~'],
[[self::class, 'test15string'], 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type string, class@anonymous given, .*~'],
['PhabelTest\Target\test15string', 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type string, class@anonymous given, .*~'],
[fn (self $data): self => $data, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[function (self $data): self { return $data; }, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[$this, 'test16self'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[self::class, 'test16self'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[fn (int $data): int => $data, 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[function (int $data): int { return $data; }, 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[[$this, 'test17int'], 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[[self::class, 'test17int'], 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
['PhabelTest\Target\test17int', 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[fn (int $data): int => $data, -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[function (int $data): int { return $data; }, -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[[$this, 'test18int'], -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[[self::class, 'test18int'], -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
['PhabelTest\Target\test18int', -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type int, class@anonymous given, .*~'],
[fn (\PhabelTest\Target\TypeHintReplacerTest $data): \PhabelTest\Target\TypeHintReplacerTest => $data, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[function (\PhabelTest\Target\TypeHintReplacerTest $data): \PhabelTest\Target\TypeHintReplacerTest { return $data; }, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[$this, 'test19PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[self::class, 'test19PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
['PhabelTest\Target\test19PhabelTestTargetTypeHintReplacerTest', $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[fn (?callable $data): ?callable => $data, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[function (?callable $data): ?callable { return $data; }, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[$this, 'test20callable'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[self::class, 'test20callable'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
['PhabelTest\Target\test20callable', "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[fn (?callable $data): ?callable => $data, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[function (?callable $data): ?callable { return $data; }, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[$this, 'test21callable'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[self::class, 'test21callable'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
['PhabelTest\Target\test21callable', fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[fn (?callable $data): ?callable => $data, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[function (?callable $data): ?callable { return $data; }, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[$this, 'test22callable'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[self::class, 'test22callable'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
['PhabelTest\Target\test22callable', [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[fn (?callable $data): ?callable => $data, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[function (?callable $data): ?callable { return $data; }, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[$this, 'test23callable'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[self::class, 'test23callable'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
['PhabelTest\Target\test23callable', [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[fn (?callable $data): ?callable => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[function (?callable $data): ?callable { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[$this, 'test24callable'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[[self::class, 'test24callable'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
['PhabelTest\Target\test24callable', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?callable, class@anonymous given, .*~'],
[fn (callable|array $data): callable|array => $data, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[function (callable|array $data): callable|array { return $data; }, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[$this, 'test25callablearray'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[self::class, 'test25callablearray'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
['PhabelTest\Target\test25callablearray', "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[fn (callable|array $data): callable|array => $data, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[function (callable|array $data): callable|array { return $data; }, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[$this, 'test26callablearray'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[self::class, 'test26callablearray'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
['PhabelTest\Target\test26callablearray', fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[fn (callable|array $data): callable|array => $data, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[function (callable|array $data): callable|array { return $data; }, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[$this, 'test27callablearray'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[self::class, 'test27callablearray'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
['PhabelTest\Target\test27callablearray', [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[fn (callable|array $data): callable|array => $data, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[function (callable|array $data): callable|array { return $data; }, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[$this, 'test28callablearray'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[self::class, 'test28callablearray'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
['PhabelTest\Target\test28callablearray', [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[fn (callable|array $data): callable|array => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[function (callable|array $data): callable|array { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[$this, 'test29callablearray'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[self::class, 'test29callablearray'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
['PhabelTest\Target\test29callablearray', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[fn (callable|array $data): callable|array => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[function (callable|array $data): callable|array { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[$this, 'test30callablearray'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[[self::class, 'test30callablearray'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
['PhabelTest\Target\test30callablearray', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type callable|array, class@anonymous given, .*~'],
[fn (?array $data): ?array => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[function (?array $data): ?array { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[[$this, 'test31array'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[[self::class, 'test31array'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
['PhabelTest\Target\test31array', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[fn (?array $data): ?array => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[function (?array $data): ?array { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[[$this, 'test32array'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[[self::class, 'test32array'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
['PhabelTest\Target\test32array', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[fn (?array $data): ?array => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[function (?array $data): ?array { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[[$this, 'test33array'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[[self::class, 'test33array'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
['PhabelTest\Target\test33array', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?array, class@anonymous given, .*~'],
[fn (array|bool $data): array|bool => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[function (array|bool $data): array|bool { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[$this, 'test34arraybool'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[self::class, 'test34arraybool'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test34arraybool', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[fn (array|bool $data): array|bool => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[function (array|bool $data): array|bool { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[$this, 'test35arraybool'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[self::class, 'test35arraybool'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test35arraybool', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[fn (array|bool $data): array|bool => $data, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[function (array|bool $data): array|bool { return $data; }, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[$this, 'test36arraybool'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[self::class, 'test36arraybool'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test36arraybool', true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[fn (array|bool $data): array|bool => $data, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[function (array|bool $data): array|bool { return $data; }, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[$this, 'test37arraybool'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[[self::class, 'test37arraybool'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test37arraybool', false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type array|bool, class@anonymous given, .*~'],
[fn (?bool $data): ?bool => $data, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[function (?bool $data): ?bool { return $data; }, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[[$this, 'test38bool'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[[self::class, 'test38bool'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
['PhabelTest\Target\test38bool', true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[fn (?bool $data): ?bool => $data, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[function (?bool $data): ?bool { return $data; }, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[[$this, 'test39bool'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[[self::class, 'test39bool'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
['PhabelTest\Target\test39bool', false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[fn (?bool $data): ?bool => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[function (?bool $data): ?bool { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[[$this, 'test40bool'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[[self::class, 'test40bool'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
['PhabelTest\Target\test40bool', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?bool, class@anonymous given, .*~'],
[fn (bool|iterable $data): bool|iterable => $data, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[function (bool|iterable $data): bool|iterable { return $data; }, true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[$this, 'test41booliterable'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[self::class, 'test41booliterable'], true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test41booliterable', true, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[fn (bool|iterable $data): bool|iterable => $data, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[function (bool|iterable $data): bool|iterable { return $data; }, false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[$this, 'test42booliterable'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[self::class, 'test42booliterable'], false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test42booliterable', false, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[fn (bool|iterable $data): bool|iterable => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[function (bool|iterable $data): bool|iterable { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[$this, 'test43booliterable'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[self::class, 'test43booliterable'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test43booliterable', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[fn (bool|iterable $data): bool|iterable => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[function (bool|iterable $data): bool|iterable { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[$this, 'test44booliterable'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[self::class, 'test44booliterable'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test44booliterable', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[fn (bool|iterable $data): bool|iterable => $data, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[function (bool|iterable $data): bool|iterable { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[$this, 'test45booliterable'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[[self::class, 'test45booliterable'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
['PhabelTest\Target\test45booliterable', (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|bool, class@anonymous given, .*~'],
[fn (?iterable $data): ?iterable => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[function (?iterable $data): ?iterable { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[$this, 'test46iterable'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[self::class, 'test46iterable'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test46iterable', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[fn (?iterable $data): ?iterable => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[function (?iterable $data): ?iterable { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[$this, 'test47iterable'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[self::class, 'test47iterable'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test47iterable', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[fn (?iterable $data): ?iterable => $data, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[function (?iterable $data): ?iterable { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[$this, 'test48iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[self::class, 'test48iterable'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test48iterable', (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[fn (?iterable $data): ?iterable => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[function (?iterable $data): ?iterable { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[$this, 'test49iterable'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[[self::class, 'test49iterable'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
['PhabelTest\Target\test49iterable', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?iterable, class@anonymous given, .*~'],
[fn (iterable|float $data): iterable|float => $data, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[function (iterable|float $data): iterable|float { return $data; }, ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[$this, 'test50iterablefloat'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[self::class, 'test50iterablefloat'], ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
['PhabelTest\Target\test50iterablefloat', ['lmao'], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[fn (iterable|float $data): iterable|float => $data, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[function (iterable|float $data): iterable|float { return $data; }, array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[$this, 'test51iterablefloat'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[self::class, 'test51iterablefloat'], array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
['PhabelTest\Target\test51iterablefloat', array(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[fn (iterable|float $data): iterable|float => $data, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[function (iterable|float $data): iterable|float { return $data; }, (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[$this, 'test52iterablefloat'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[self::class, 'test52iterablefloat'], (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
['PhabelTest\Target\test52iterablefloat', (fn (): \Generator => yield)(), new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[fn (iterable|float $data): iterable|float => $data, 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[function (iterable|float $data): iterable|float { return $data; }, 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[$this, 'test53iterablefloat'], 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[self::class, 'test53iterablefloat'], 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
['PhabelTest\Target\test53iterablefloat', 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[fn (iterable|float $data): iterable|float => $data, 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[function (iterable|float $data): iterable|float { return $data; }, 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[$this, 'test54iterablefloat'], 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[[self::class, 'test54iterablefloat'], 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
['PhabelTest\Target\test54iterablefloat', 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type iterable|float, class@anonymous given, .*~'],
[fn (?float $data): ?float => $data, 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[function (?float $data): ?float { return $data; }, 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[[$this, 'test55float'], 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[[self::class, 'test55float'], 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
['PhabelTest\Target\test55float', 123.123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[fn (?float $data): ?float => $data, 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[function (?float $data): ?float { return $data; }, 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[[$this, 'test56float'], 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[[self::class, 'test56float'], 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
['PhabelTest\Target\test56float', 1e3, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[fn (?float $data): ?float => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[function (?float $data): ?float { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[[$this, 'test57float'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[[self::class, 'test57float'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
['PhabelTest\Target\test57float', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?float, class@anonymous given, .*~'],
[fn (float|object $data): float|object => $data, 123.123, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[function (float|object $data): float|object { return $data; }, 123.123, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[$this, 'test58floatobject'], 123.123, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[self::class, 'test58floatobject'], 123.123, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
['PhabelTest\Target\test58floatobject', 123.123, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[fn (float|object $data): float|object => $data, 1e3, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[function (float|object $data): float|object { return $data; }, 1e3, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[$this, 'test59floatobject'], 1e3, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[self::class, 'test59floatobject'], 1e3, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
['PhabelTest\Target\test59floatobject', 1e3, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[fn (float|object $data): float|object => $data, new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[function (float|object $data): float|object { return $data; }, new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[$this, 'test60floatobject'], new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[self::class, 'test60floatobject'], new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
['PhabelTest\Target\test60floatobject', new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[fn (float|object $data): float|object => $data, $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[function (float|object $data): float|object { return $data; }, $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[$this, 'test61floatobject'], $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[[self::class, 'test61floatobject'], $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
['PhabelTest\Target\test61floatobject', $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|float, null given, .*~'],
[fn (?object $data): ?object => $data, new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[function (?object $data): ?object { return $data; }, new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[[$this, 'test62object'], new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[[self::class, 'test62object'], new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
['PhabelTest\Target\test62object', new class{}, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[fn (?object $data): ?object => $data, $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[function (?object $data): ?object { return $data; }, $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[[$this, 'test63object'], $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[[self::class, 'test63object'], $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
['PhabelTest\Target\test63object', $this, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[fn (?object $data): ?object => $data, null, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[function (?object $data): ?object { return $data; }, null, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[[$this, 'test64object'], null, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[[self::class, 'test64object'], null, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
['PhabelTest\Target\test64object', null, 0, '~.*Argument #1 \\(\\$data\\) must be of type \\?object, int given, .*~'],
[fn (object|string $data): object|string => $data, new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[function (object|string $data): object|string { return $data; }, new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[[$this, 'test65objectstring'], new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[[self::class, 'test65objectstring'], new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
['PhabelTest\Target\test65objectstring', new class{}, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[fn (object|string $data): object|string => $data, $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[function (object|string $data): object|string { return $data; }, $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[[$this, 'test66objectstring'], $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[[self::class, 'test66objectstring'], $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
['PhabelTest\Target\test66objectstring', $this, null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[fn (object|string $data): object|string => $data, 'lmao', null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[function (object|string $data): object|string { return $data; }, 'lmao', null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[[$this, 'test67objectstring'], 'lmao', null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[[self::class, 'test67objectstring'], 'lmao', null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
['PhabelTest\Target\test67objectstring', 'lmao', null, '~.*Argument #1 \\(\\$data\\) must be of type object|string, null given, .*~'],
[fn (?string $data): ?string => $data, 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[function (?string $data): ?string { return $data; }, 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[[$this, 'test68string'], 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[[self::class, 'test68string'], 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
['PhabelTest\Target\test68string', 'lmao', new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[fn (?string $data): ?string => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[function (?string $data): ?string { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[[$this, 'test69string'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[[self::class, 'test69string'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
['PhabelTest\Target\test69string', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?string, class@anonymous given, .*~'],
[fn (?self $data): ?self => $data, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[function (?self $data): ?self { return $data; }, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[$this, 'test70self'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[self::class, 'test70self'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[fn (?self $data): ?self => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[function (?self $data): ?self { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[$this, 'test71self'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[self::class, 'test71self'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[fn (?int $data): ?int => $data, 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[function (?int $data): ?int { return $data; }, 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[[$this, 'test72int'], 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[[self::class, 'test72int'], 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
['PhabelTest\Target\test72int', 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[fn (?int $data): ?int => $data, -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[function (?int $data): ?int { return $data; }, -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[[$this, 'test73int'], -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[[self::class, 'test73int'], -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
['PhabelTest\Target\test73int', -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[fn (?int $data): ?int => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[function (?int $data): ?int { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[[$this, 'test74int'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[[self::class, 'test74int'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
['PhabelTest\Target\test74int', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?int, class@anonymous given, .*~'],
[fn (int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest => $data, 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[function (int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }, 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[[$this, 'test75intPhabelTestTargetTypeHintReplacerTest'], 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[[self::class, 'test75intPhabelTestTargetTypeHintReplacerTest'], 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
['PhabelTest\Target\test75intPhabelTestTargetTypeHintReplacerTest', 123, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[fn (int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest => $data, -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[function (int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }, -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[[$this, 'test76intPhabelTestTargetTypeHintReplacerTest'], -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[[self::class, 'test76intPhabelTestTargetTypeHintReplacerTest'], -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
['PhabelTest\Target\test76intPhabelTestTargetTypeHintReplacerTest', -1, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[fn (int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest => $data, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[function (int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[[$this, 'test77intPhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[[self::class, 'test77intPhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
['PhabelTest\Target\test77intPhabelTestTargetTypeHintReplacerTest', $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|int, class@anonymous given, .*~'],
[fn (?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest => $data, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[function (?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[$this, 'test78PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[self::class, 'test78PhabelTestTargetTypeHintReplacerTest'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
['PhabelTest\Target\test78PhabelTestTargetTypeHintReplacerTest', $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[fn (?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest => $data, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[function (?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }, null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[$this, 'test79PhabelTestTargetTypeHintReplacerTest'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[[self::class, 'test79PhabelTestTargetTypeHintReplacerTest'], null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
['PhabelTest\Target\test79PhabelTestTargetTypeHintReplacerTest', null, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type \\?PhabelTest\\\\Target\\\\TypeHintReplacerTest, class@anonymous given, .*~'],
[fn (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[function (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[$this, 'test80PhabelTestTargetTypeHintReplacerTestcallable'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[self::class, 'test80PhabelTestTargetTypeHintReplacerTestcallable'], $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
['PhabelTest\Target\test80PhabelTestTargetTypeHintReplacerTestcallable', $this, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[fn (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[function (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[$this, 'test81PhabelTestTargetTypeHintReplacerTestcallable'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[self::class, 'test81PhabelTestTargetTypeHintReplacerTestcallable'], "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
['PhabelTest\Target\test81PhabelTestTargetTypeHintReplacerTestcallable', "is_null", new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[fn (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[function (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[$this, 'test82PhabelTestTargetTypeHintReplacerTestcallable'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[self::class, 'test82PhabelTestTargetTypeHintReplacerTestcallable'], fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
['PhabelTest\Target\test82PhabelTestTargetTypeHintReplacerTestcallable', fn (): int => 0, new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[fn (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[function (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[$this, 'test83PhabelTestTargetTypeHintReplacerTestcallable'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[self::class, 'test83PhabelTestTargetTypeHintReplacerTestcallable'], [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
['PhabelTest\Target\test83PhabelTestTargetTypeHintReplacerTestcallable', [$this, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[fn (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable => $data, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[function (\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }, [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[$this, 'test84PhabelTestTargetTypeHintReplacerTestcallable'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
[[self::class, 'test84PhabelTestTargetTypeHintReplacerTestcallable'], [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~'],
['PhabelTest\Target\test84PhabelTestTargetTypeHintReplacerTestcallable', [self::class, "noop"], new class{}, '~.*Argument #1 \\(\\$data\\) must be of type PhabelTest\\\\Target\\\\TypeHintReplacerTest|callable, class@anonymous given, .*~']];
;
    }
    
    public static function noop() {}
    private static function test0callable(callable $data): callable { return $data; }
private static function testRet0callable($data): callable { return $data; }
private static function test1callable(callable $data): callable { return $data; }
private static function testRet1callable($data): callable { return $data; }
private static function test2callable(callable $data): callable { return $data; }
private static function testRet2callable($data): callable { return $data; }
private static function test3callable(callable $data): callable { return $data; }
private static function testRet3callable($data): callable { return $data; }
private static function test4array(array $data): array { return $data; }
private static function testRet4array($data): array { return $data; }
private static function test5array(array $data): array { return $data; }
private static function testRet5array($data): array { return $data; }
private static function test6bool(bool $data): bool { return $data; }
private static function testRet6bool($data): bool { return $data; }
private static function test7bool(bool $data): bool { return $data; }
private static function testRet7bool($data): bool { return $data; }
private static function test8iterable(iterable $data): iterable { return $data; }
private static function testRet8iterable($data): iterable { return $data; }
private static function test9iterable(iterable $data): iterable { return $data; }
private static function testRet9iterable($data): iterable { return $data; }
private static function test10iterable(iterable $data): iterable { return $data; }
private static function testRet10iterable($data): iterable { return $data; }
private static function test11float(float $data): float { return $data; }
private static function testRet11float($data): float { return $data; }
private static function test12float(float $data): float { return $data; }
private static function testRet12float($data): float { return $data; }
private static function test13object(object $data): object { return $data; }
private static function testRet13object($data): object { return $data; }
private static function test14object(object $data): object { return $data; }
private static function testRet14object($data): object { return $data; }
private static function test15string(string $data): string { return $data; }
private static function testRet15string($data): string { return $data; }
private static function test16self(self $data): self { return $data; }
private static function testRet16self($data): self { return $data; }
private static function test17int(int $data): int { return $data; }
private static function testRet17int($data): int { return $data; }
private static function test18int(int $data): int { return $data; }
private static function testRet18int($data): int { return $data; }
private static function test19PhabelTestTargetTypeHintReplacerTest(\PhabelTest\Target\TypeHintReplacerTest $data): \PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function testRet19PhabelTestTargetTypeHintReplacerTest($data): \PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function test20callable(?callable $data): ?callable { return $data; }
private static function testRet20callable($data): ?callable { return $data; }
private static function test21callable(?callable $data): ?callable { return $data; }
private static function testRet21callable($data): ?callable { return $data; }
private static function test22callable(?callable $data): ?callable { return $data; }
private static function testRet22callable($data): ?callable { return $data; }
private static function test23callable(?callable $data): ?callable { return $data; }
private static function testRet23callable($data): ?callable { return $data; }
private static function test24callable(?callable $data): ?callable { return $data; }
private static function testRet24callable($data): ?callable { return $data; }
private static function test25callablearray(callable|array $data): callable|array { return $data; }
private static function testRet25callablearray($data): callable|array { return $data; }
private static function test26callablearray(callable|array $data): callable|array { return $data; }
private static function testRet26callablearray($data): callable|array { return $data; }
private static function test27callablearray(callable|array $data): callable|array { return $data; }
private static function testRet27callablearray($data): callable|array { return $data; }
private static function test28callablearray(callable|array $data): callable|array { return $data; }
private static function testRet28callablearray($data): callable|array { return $data; }
private static function test29callablearray(callable|array $data): callable|array { return $data; }
private static function testRet29callablearray($data): callable|array { return $data; }
private static function test30callablearray(callable|array $data): callable|array { return $data; }
private static function testRet30callablearray($data): callable|array { return $data; }
private static function test31array(?array $data): ?array { return $data; }
private static function testRet31array($data): ?array { return $data; }
private static function test32array(?array $data): ?array { return $data; }
private static function testRet32array($data): ?array { return $data; }
private static function test33array(?array $data): ?array { return $data; }
private static function testRet33array($data): ?array { return $data; }
private static function test34arraybool(array|bool $data): array|bool { return $data; }
private static function testRet34arraybool($data): array|bool { return $data; }
private static function test35arraybool(array|bool $data): array|bool { return $data; }
private static function testRet35arraybool($data): array|bool { return $data; }
private static function test36arraybool(array|bool $data): array|bool { return $data; }
private static function testRet36arraybool($data): array|bool { return $data; }
private static function test37arraybool(array|bool $data): array|bool { return $data; }
private static function testRet37arraybool($data): array|bool { return $data; }
private static function test38bool(?bool $data): ?bool { return $data; }
private static function testRet38bool($data): ?bool { return $data; }
private static function test39bool(?bool $data): ?bool { return $data; }
private static function testRet39bool($data): ?bool { return $data; }
private static function test40bool(?bool $data): ?bool { return $data; }
private static function testRet40bool($data): ?bool { return $data; }
private static function test41booliterable(bool|iterable $data): bool|iterable { return $data; }
private static function testRet41booliterable($data): bool|iterable { return $data; }
private static function test42booliterable(bool|iterable $data): bool|iterable { return $data; }
private static function testRet42booliterable($data): bool|iterable { return $data; }
private static function test43booliterable(bool|iterable $data): bool|iterable { return $data; }
private static function testRet43booliterable($data): bool|iterable { return $data; }
private static function test44booliterable(bool|iterable $data): bool|iterable { return $data; }
private static function testRet44booliterable($data): bool|iterable { return $data; }
private static function test45booliterable(bool|iterable $data): bool|iterable { return $data; }
private static function testRet45booliterable($data): bool|iterable { return $data; }
private static function test46iterable(?iterable $data): ?iterable { return $data; }
private static function testRet46iterable($data): ?iterable { return $data; }
private static function test47iterable(?iterable $data): ?iterable { return $data; }
private static function testRet47iterable($data): ?iterable { return $data; }
private static function test48iterable(?iterable $data): ?iterable { return $data; }
private static function testRet48iterable($data): ?iterable { return $data; }
private static function test49iterable(?iterable $data): ?iterable { return $data; }
private static function testRet49iterable($data): ?iterable { return $data; }
private static function test50iterablefloat(iterable|float $data): iterable|float { return $data; }
private static function testRet50iterablefloat($data): iterable|float { return $data; }
private static function test51iterablefloat(iterable|float $data): iterable|float { return $data; }
private static function testRet51iterablefloat($data): iterable|float { return $data; }
private static function test52iterablefloat(iterable|float $data): iterable|float { return $data; }
private static function testRet52iterablefloat($data): iterable|float { return $data; }
private static function test53iterablefloat(iterable|float $data): iterable|float { return $data; }
private static function testRet53iterablefloat($data): iterable|float { return $data; }
private static function test54iterablefloat(iterable|float $data): iterable|float { return $data; }
private static function testRet54iterablefloat($data): iterable|float { return $data; }
private static function test55float(?float $data): ?float { return $data; }
private static function testRet55float($data): ?float { return $data; }
private static function test56float(?float $data): ?float { return $data; }
private static function testRet56float($data): ?float { return $data; }
private static function test57float(?float $data): ?float { return $data; }
private static function testRet57float($data): ?float { return $data; }
private static function test58floatobject(float|object $data): float|object { return $data; }
private static function testRet58floatobject($data): float|object { return $data; }
private static function test59floatobject(float|object $data): float|object { return $data; }
private static function testRet59floatobject($data): float|object { return $data; }
private static function test60floatobject(float|object $data): float|object { return $data; }
private static function testRet60floatobject($data): float|object { return $data; }
private static function test61floatobject(float|object $data): float|object { return $data; }
private static function testRet61floatobject($data): float|object { return $data; }
private static function test62object(?object $data): ?object { return $data; }
private static function testRet62object($data): ?object { return $data; }
private static function test63object(?object $data): ?object { return $data; }
private static function testRet63object($data): ?object { return $data; }
private static function test64object(?object $data): ?object { return $data; }
private static function testRet64object($data): ?object { return $data; }
private static function test65objectstring(object|string $data): object|string { return $data; }
private static function testRet65objectstring($data): object|string { return $data; }
private static function test66objectstring(object|string $data): object|string { return $data; }
private static function testRet66objectstring($data): object|string { return $data; }
private static function test67objectstring(object|string $data): object|string { return $data; }
private static function testRet67objectstring($data): object|string { return $data; }
private static function test68string(?string $data): ?string { return $data; }
private static function testRet68string($data): ?string { return $data; }
private static function test69string(?string $data): ?string { return $data; }
private static function testRet69string($data): ?string { return $data; }
private static function test70self(?self $data): ?self { return $data; }
private static function testRet70self($data): ?self { return $data; }
private static function test71self(?self $data): ?self { return $data; }
private static function testRet71self($data): ?self { return $data; }
private static function test72int(?int $data): ?int { return $data; }
private static function testRet72int($data): ?int { return $data; }
private static function test73int(?int $data): ?int { return $data; }
private static function testRet73int($data): ?int { return $data; }
private static function test74int(?int $data): ?int { return $data; }
private static function testRet74int($data): ?int { return $data; }
private static function test75intPhabelTestTargetTypeHintReplacerTest(int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function testRet75intPhabelTestTargetTypeHintReplacerTest($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function test76intPhabelTestTargetTypeHintReplacerTest(int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function testRet76intPhabelTestTargetTypeHintReplacerTest($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function test77intPhabelTestTargetTypeHintReplacerTest(int|\PhabelTest\Target\TypeHintReplacerTest $data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function testRet77intPhabelTestTargetTypeHintReplacerTest($data): int|\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function test78PhabelTestTargetTypeHintReplacerTest(?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function testRet78PhabelTestTargetTypeHintReplacerTest($data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function test79PhabelTestTargetTypeHintReplacerTest(?\PhabelTest\Target\TypeHintReplacerTest $data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function testRet79PhabelTestTargetTypeHintReplacerTest($data): ?\PhabelTest\Target\TypeHintReplacerTest { return $data; }
private static function test80PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function testRet80PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function test81PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function testRet81PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function test82PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function testRet82PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function test83PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function testRet83PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function test84PhabelTestTargetTypeHintReplacerTestcallable(\PhabelTest\Target\TypeHintReplacerTest|callable $data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }
private static function testRet84PhabelTestTargetTypeHintReplacerTestcallable($data): \PhabelTest\Target\TypeHintReplacerTest|callable { return $data; }

}