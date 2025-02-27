<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\ListGroup\Item;

trait ManagesListGroupItemIndicatorIcon
{
    /**
     * Set the default indicator icon for the `<x-list-group.item` component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultListGroupItemIndicatorIcon(string $icon): void
    {
        Item::setDefaultIndicatorIcon(icon: $icon);
    }
}
