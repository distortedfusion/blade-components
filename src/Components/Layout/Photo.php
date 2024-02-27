<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

use Closure;
use Illuminate\View\Component;

class Photo extends Component
{
    public ?string $src;
    public ?string $srcset;
    public ?string $alt;
    public string $icon;
    public ?string $size;

    /**
     * Create a new component instance.
     *
     * @param string|null $src
     * @param string|null $srcset
     * @param string|null $alt
     * @param string      $icon
     * @param string|null $size
     */
    public function __construct(?string $src = null, ?string $srcset = null, ?string $alt = null, string $icon = 'fal-user', ?string $size = null)
    {
        $this->src = $src;
        $this->srcset = $srcset;
        $this->alt = $alt;
        $this->icon = $icon;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.layout.photo');
    }
}
