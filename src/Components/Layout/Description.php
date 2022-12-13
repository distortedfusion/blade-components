<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Closure;
use Illuminate\View\Component;

class Description extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.description');
    }
}
