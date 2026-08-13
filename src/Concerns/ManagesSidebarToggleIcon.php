<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\Layout\SidebarToggle;

trait ManagesSidebarToggleIcon
{
    /**
     * Set the default icon for the `<x-sidebar-toggle` component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultSidebarToggleIcon(string $icon): void
    {
        SidebarToggle::setDefaultIcon(icon: $icon);
    }

    public static function defaultSidebarToggleIcon(): string
    {
        return SidebarToggle::defaultIcon();
    }
}
