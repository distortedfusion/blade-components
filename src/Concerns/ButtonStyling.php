<?php

namespace DistortedFusion\Tailwind\Concerns;

trait ButtonStyling
{
    /**
     * Get the button class for the style.
     *
     * @param string $style
     * @param string $default
     *
     * @return string|null
     */
    public static function buttonClass(string $style, string $default = 'primary'): ?string
    {
        if (! is_null($style) && array_key_exists($style, static::buttonStyles())) {
            return static::buttonStyles()[$style];
        }

        return static::buttonStyles()[$default] ?? null;
    }

    /**
     * Get the text class for the style.
     *
     * @param string $style
     * @param string $default
     *
     * @return string|null
     */
    public static function textClass(string $style, string $default = 'primary'): ?string
    {
        if (! is_null($style) && array_key_exists($style, static::textStyles())) {
            return static::textStyles()[$style];
        }

        return static::textStyles()[$default] ?? null;
    }

    public static function buttonStyles(): array
    {
        return [
            'primary' => 'btn-primary',
            'default' => 'btn-default',
            'success' => 'btn-success',
            'info' => 'btn-info',
            'warning' => 'btn-warning',
            'danger' => 'btn-danger',
        ];
    }

    public static function textStyles(): array
    {
        return [
            'default' => 'text-muted',
            'success' => 'text-success',
            'info' => 'text-info',
            'warning' => 'text-warning',
            'danger' => 'text-danger',
        ];
    }
}
