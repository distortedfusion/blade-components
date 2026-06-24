<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Components\Avatar;

use Closure;
use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Default icon.
     *
     * @var string
     */
    public static string $defaultIcon = 'heroicon-o-user';

    public function __construct(
        public ?string $src = null,
        public ?string $srcset = null,
        public ?string $alt = null,
        public string $size = 'default',
        public bool $circle = false,
        public ?string $icon = null,
    ) {
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
