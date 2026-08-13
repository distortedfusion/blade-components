<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Components\Layout;

use Closure;
use Illuminate\View\Component;

class SidebarToggle extends Component
{
    /**
     * Default icon.
     *
     * @var string
     */
    public static string $defaultIcon = 'heroicon-o-bars-2';

    public function __construct(
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
        return view('blade-components::components.layout.sidebar-toggle');
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
