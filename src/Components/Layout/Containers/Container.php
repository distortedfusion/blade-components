<?php

namespace DistortedFusion\Tailwind\Components\Layout\Containers;

use Illuminate\View\Component;

class Container extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.containers.container');
    }
}
