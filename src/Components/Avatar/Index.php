<?php

namespace DistortedFusion\BladeComponents\Components\Avatar;

use Closure;
use Illuminate\View\Component;

class Index extends Component
{
    public ?string $src;
    public ?string $srcset;
    public ?string $alt;
    public ?string $size;
    public string $icon;

    /**
     * Default icon.
     *
     * @var string
     */
    public static string $defaultIcon = 'heroicon-o-user';

    /**
     * Create a new component instance.
     *
     * @param ?string $src
     * @param ?string $srcset
     * @param ?string $alt
     * @param ?string $size
     * @param ?string $icon
     */
    public function __construct(
        ?string $src = null,
        ?string $srcset = null,
        ?string $alt = null,
        ?string $size = null,
        ?string $icon = null,
    ) {
        $this->src = $src;
        $this->srcset = $srcset;
        $this->alt = $alt;
        $this->size = $size;

        $this->icon = $icon ?: $this->defaultIcon();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.avatar.index');
    }

    /**
     * Get the default icon.
     *
     * @return string|null
     */
    public static function defaultIcon(): ?string
    {
        return static::$defaultIcon;
    }

    /**
     * Set the default icon.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultIcon(string $icon): void
    {
        static::$defaultIcon = $icon;
    }
}
