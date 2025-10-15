<?php

namespace DistortedFusion\BladeComponents\Components\Accordion;

use DistortedFusion\BladeComponents\Components\Concerns\HasIndicatorIcon;
use Illuminate\View\Component;

class Toggle extends Component
{
    use HasIndicatorIcon;

    /**
     * Default indicator icon.
     *
     * @var string
     */
    public static string $defaultIndicatorIcon = 'heroicon-o-chevron-down';

    /**
     * Create the component instance.
     *
     * @param ?string $indicatorIcon
     */
    public function __construct(
        ?string $indicatorIcon = null,
    ) {
        $this->indicatorIcon = $indicatorIcon ?: $this->defaultIndicatorIcon();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.accordion.toggle');
    }

    /**
     * Get the default indicator icon for link or button items.
     *
     * @return string|null
     */
    public static function defaultIndicatorIcon(): ?string
    {
        return static::$defaultIndicatorIcon;
    }

    /**
     * Set the default indicator icon for link or button items.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultIndicatorIcon(string $icon): void
    {
        static::$defaultIndicatorIcon = $icon;
    }
}
