<?php

namespace DistortedFusion\BladeComponents\Concerns;

use Illuminate\Support\Str;

trait ChecksClass
{
    public static array $defaultTailwindSizingScale = [
        'xs', 'sm', 'base', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl', '8xl', '9xl',
    ];

    public static array $defaultTailwindWeightScale = [
        'thin', 'extralight', 'light', 'normal', 'medium', 'semibold', 'bold', 'extrabold', 'black',
    ];

    /**
     * Determine if the provided class contains padding classes in any direction.
     *
     * @param string|null $class
     *
     * @return bool
     */
    public static function containsPaddingClass(?string $class): bool
    {
        if (is_null($class)) {
            return false;
        }

        return Str::contains($class, ['p-'])
            || static::containsHorizontalPaddingClass($class)
            || static::containsVerticalPaddingClass($class);
    }

    /**
     * Determine if the provided class contains horizontal padding classes.
     *
     * @param string|null $class
     *
     * @return bool
     */
    public static function containsHorizontalPaddingClass(?string $class): bool
    {
        if (is_null($class)) {
            return false;
        }

        return Str::contains($class, [
            'px-', 'pl-', 'pr-',
        ]);
    }

    /**
     * Determine if the provided class contains vertical padding classes.
     *
     * @param string|null $class
     *
     * @return bool
     */
    public static function containsVerticalPaddingClass(?string $class): bool
    {
        if (is_null($class)) {
            return false;
        }

        return Str::contains($class, [
            'py-', 'pt-', 'pb-',
        ]);
    }

    /**
     * Determine if the provided class contains any of the default font-size classes.
     *
     * This doesn't include arbitrary values.
     *
     * @param string|null $class
     *
     * @return bool
     */
    public static function containsFontSizeClass(?string $class): bool
    {
        if (is_null($class)) {
            return false;
        }

        return Str::contains($class, array_map(
            fn (string $scale): string => 'text-'.$scale,
            static::$defaultTailwindSizingScale
        ));
    }

    /**
     * Determine if the provided class contains any of the default font-weight classes.
     *
     * This doesn't include arbitrary values.
     *
     * @param string|null $class
     *
     * @return bool
     */
    public static function containsFontWeightClass(?string $class): bool
    {
        if (is_null($class)) {
            return false;
        }

        return Str::contains($class, array_map(
            fn (string $scale): string => 'font-'.$scale,
            static::$defaultTailwindWeightScale
        ));
    }
}
