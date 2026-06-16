<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\AssetManager;

trait ManagesAssets
{
    public static function ddfsnAppearance(array $options = []): string
    {
        return AssetManager::ddfsnAppearance($options);
    }
}
