<?php

namespace DistortedFusion\BladeComponents\Concerns;

trait ManagesBreadcrumbIcons
{
    public static string $defaultEllipsisIcon = 'heroicon-o-ellipsis-horizontal';
    public static string $defaultSeparatorIcon = 'heroicon-o-chevron-right';

    /**
     * Set the default ellipsis icon for the '<x-breadcrumb.ellipsis' component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultBreadcrumbEllipsisIcon(string $icon): void
    {
        static::$defaultEllipsisIcon = $icon;
    }

    public static function defaultBreadcrumbEllipsisIcon(): string
    {
        return static::$defaultEllipsisIcon;
    }

    /**
     * Set the default ellipsis icon for the '<x-breadcrumb.separator' component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultBreadcrumbSeparatorIcon(string $icon): void
    {
        static::$defaultSeparatorIcon = $icon;
    }

    public static function defaultBreadcrumbSeparatorIcon(): string
    {
        return static::$defaultSeparatorIcon;
    }
}
