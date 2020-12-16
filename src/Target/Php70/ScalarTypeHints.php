<?php

namespace Phabel\Target\Php70;

use Phabel\Plugin;
use Phabel\Plugin\TypeHintStripper;

/**
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
class ScalarTypeHints extends Plugin
{
    /**
     * Alias.
     *
     * @return array
     */
    public static function runAfter(array $config): array
    {
        return [
            TypeHintStripper::class => [
                'types' => ['int', 'float', 'string', 'bool']
            ]
        ];
    }
}
