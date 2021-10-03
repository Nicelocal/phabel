<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhabelVendor\Symfony\Component\Console\Attribute;

/**
 * Service tag to autoconfigure commands.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class AsCommand
{
    public function __construct(string $name, ?string $description = null, array $aliases = [], bool $hidden = \false)
    {
        $this->description = $description;
        $this->name = $name;
        if (!$hidden && !$aliases) {
            return;
        }
        $name = \explode('|', $name);
        $name = \array_merge($name, $aliases);
        if ($hidden && '' !== $name[0]) {
            \array_unshift($name, '');
        }
        $this->name = \implode('|', $name);
    }
    public $description;
    public $name;
}
