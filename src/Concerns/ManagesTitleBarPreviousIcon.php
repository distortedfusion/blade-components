<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\Layout\TitleBar;

trait ManagesTitleBarPreviousIcon
{
    /**
     * Set the default previous icon for the `<x-layout.title-bar` component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultTitleBarPreviousIcon(string $icon): void
    {
        TitleBar::setDefaultPreviousIcon(icon: $icon);
    }
}
