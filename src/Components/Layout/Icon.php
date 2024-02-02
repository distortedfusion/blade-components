<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

use Closure;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $icon;
    public string $style;
    public ?string $size;

    /**
     * Create a new component instance.
     *
     * @param string      $icon
     * @param string      $style
     * @param string|null $size
     */
    public function __construct(string $icon, string $style = 'primary', string $size = null)
    {
        $this->icon = $icon;
        $this->style = $style;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.layout.icon');
    }
}
