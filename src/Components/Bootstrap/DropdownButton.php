<?php

namespace DistortedFusion\Tailwind\Components\Bootstrap;

use Illuminate\View\Component;

class DropdownButton extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.bootstrap.dropdown-button');
    }
}
