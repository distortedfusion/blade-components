<?php

namespace DistortedFusion\BladeComponents\Components\Concerns;

trait HasIndicatorIcon
{
    /**
     * The indicator icon.
     *
     * @var string|null
     */
    public ?string $indicatorIcon;

    /**
     * Get the default indicator icon for link or button items.
     *
     * @return string|null
     */
    abstract public static function defaultIndicatorIcon(): ?string;

    /**
     * Set the default indicator icon for link or button items.
     *
     * @param string $icon
     *
     * @return void
     */
    abstract public static function setDefaultIndicatorIcon(string $icon): void;
}
