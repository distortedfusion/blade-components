<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\ListGroup\Item;

trait ManagesListGroupItemIndicatorIcon
{
    /**
     * Set the default icon for the supplied alert style.
     *
     * @param string $style
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultListGroupItemIndicatorIcon(string $icon): void
    {
        Item::setDefaultIndicatorIcon(icon: $icon);
    }
}
