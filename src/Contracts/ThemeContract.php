<?php

namespace DistortedFusion\BladeComponents\Contracts;

use DistortedFusion\BladeComponents\Enums\ThemeVariant;

interface ThemeContract
{
    /**
     * Get the `distortedfusion/blade-colors` variable definitions for the provided theme variant.
     *
     * @param ThemeVariant $variant
     *
     * @return array
     */
    public static function bladeColorDefinitions(ThemeVariant $variant): array;
}
