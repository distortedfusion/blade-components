<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\Alert\Index;

trait ManagesAlertIcons
{
    /**
     * Set the default style icon for the '<x-alert' component.
     *
     * @param string $style
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultAlertIconForStyle(string $style, string $icon): void
    {
        Index::setDefaultIconForStyle(style: $style, icon: $icon);
    }

    /**
     * Set the default style icons for the '<x-alert' component.
     *
     * @param array $icons
     *
     * @return void
     */
    public static function setDefaultAlertIcons(array $icons): void
    {
        Index::setDefaultIcons(icons: $icons);
    }
}
