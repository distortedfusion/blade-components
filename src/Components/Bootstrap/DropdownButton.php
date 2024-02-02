<?php

namespace DistortedFusion\BladeComponents\Components\Bootstrap;

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
        return view('blade-components::components.bootstrap.dropdown-button');
    }
}
