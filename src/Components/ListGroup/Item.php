<?php

namespace DistortedFusion\BladeComponents\Components\ListGroup;

use Illuminate\View\Component;

class Item extends Component
{
    public ?string $href;
    public string $target;
    public ?string $title;
    public string $type;
    public bool $button;

    /**
     * The indicator icon.
     *
     * @var string|null
     */
    public ?string $indicatorIcon;

    /**
     * Default indicator icon.
     *
     * @var string
     */
    public static string $defaultIndicatorIcon = 'heroicon-o-chevron-right';

    /**
     * Create the component instance.
     *
     * @param ?string $href
     * @param string  $target
     * @param ?string $title
     * @param string  $type
     * @param bool    $button
     * @param ?string $indicatorIcon
     */
    public function __construct(
        ?string $href = null,
        string $target = '_self',
        ?string $title = null,
        string $type = 'button',
        bool $button = false,
        ?string $indicatorIcon = null,
    ) {
        $this->href = $href;
        $this->target = $target;
        $this->title = $title;
        $this->type = $type;
        $this->button = $button;

        $this->indicatorIcon = $indicatorIcon ?: $this->defaultIndicatorIcon();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.list-group.item');
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
