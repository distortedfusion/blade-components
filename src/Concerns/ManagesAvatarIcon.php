<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\Avatar\Index;

trait ManagesAvatarIcon
{
    /**
     * Set the default icon for the `<x-avatar` component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultAvatarIcon(string $icon): void
    {
        Index::setDefaultIcon(icon: $icon);
    }
}
