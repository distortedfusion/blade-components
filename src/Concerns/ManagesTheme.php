<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Contracts\ThemeContract;
use DistortedFusion\BladeComponents\Exceptions\InvalidThemeException;
use DistortedFusion\BladeComponents\Themes\DefaultTheme;

trait ManagesTheme
{
    protected static string $theme = DefaultTheme::class;

    /**
     * Get the theme implementation.
     *
     * @return string
     */
    public static function theme(): string
    {
        return static::$theme;
    }

    /**
     * Set the theme implementation.
     *
     * @param string $theme
     *
     * @return void
     */
    public static function setTheme(string $theme): void
    {
        if (! in_array(ThemeContract::class, class_implements($theme))) {
            throw new InvalidThemeException();
        }

        static::$theme = $theme;
    }
}
