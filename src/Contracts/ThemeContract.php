<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Contracts;

use DistortedFusion\BladeComponents\Enums\ThemeVariant;

interface ThemeContract
{
    /**
     * Get the variable definitions for the theme variants.
     *
     * @param ThemeVariant $variant
     *
     * @return array
     */
    public static function definitions(ThemeVariant $variant): array;
}
