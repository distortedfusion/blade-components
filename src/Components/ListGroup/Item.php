<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Components\ListGroup;

use DistortedFusion\BladeComponents\Components\Concerns\HasIndicatorIcon;
use Illuminate\View\Component;

class Item extends Component
{
    use HasIndicatorIcon;

    public ?string $href;
    public string $target;
    public ?string $title;
    public ?string $description;
    public string $type;
    public bool $button;
    public bool $wrap;
    public ?string $icon;

    /**
     * Default indicator icon.
     *
     * @var string
     */
    public static string $defaultIndicatorIcon = 'heroicon-o-chevron-right';

    public function __construct(
        ?string $href = null,
        string $target = '_self',
        ?string $title = null,
        ?string $description = null,
        string $type = 'button',
        bool $button = false,
        bool $wrap = false,
        ?string $icon = null,
        ?string $indicatorIcon = null,
    ) {
        $this->href = $href;
        $this->target = $target;
        $this->title = $title;
        $this->description = $description;
        $this->type = $type;
        $this->button = $button;
        $this->wrap = $wrap;

        $this->icon = $icon;
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
