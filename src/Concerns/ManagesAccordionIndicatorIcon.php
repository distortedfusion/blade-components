<?php

namespace DistortedFusion\BladeComponents\Concerns;

use DistortedFusion\BladeComponents\Components\Accordion\Toggle;

trait ManagesAccordionIndicatorIcon
{
    /**
     * Set the default indicator icon for the `<x-accordion.toggle` component.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultAccordionIndicatorIcon(string $icon): void
    {
        Toggle::setDefaultIndicatorIcon(icon: $icon);
    }

    public static function defaultAccordionIndicatorIcon(): string
    {
        return Toggle::defaultIndicatorIcon();
    }
}
