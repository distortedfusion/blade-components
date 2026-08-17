<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Concerns;

use Closure;
use DistortedFusion\BladeComponents\ThemeManager;

trait ManagesThemes
{
    /**
     * Register a theme.
     *
     * @param string   $theme
     * @param ?Closure $selectorResolver
     *
     * @return ThemeManager
     */
    public static function registerTheme(string $theme, ?Closure $selectorResolver = null): ThemeManager
    {
        return ThemeManager::registerTheme(
            theme: $theme,
            selectorResolver: $selectorResolver,
        );
    }

    /**
     * Get the default theme.
     *
     * @return string|null
     */
    public static function defaultTheme(): ?string
    {
        return ThemeManager::defaultTheme();
    }

    /**
     * Set the default theme.
     *
     * @param string $theme
     *
     * @return void
     */
    public static function setDefaultTheme(string $theme): void
    {
        ThemeManager::setDefaultTheme(theme: $theme);
    }

    /**
     * Disable the default theme.
     *
     * @param bool $state
     *
     * @return void
     */
    public static function disableDefaultTheme(bool $state = true)
    {
        ThemeManager::disableDefaultTheme(state: $state);
    }
}
