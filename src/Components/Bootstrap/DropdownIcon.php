<?php

namespace DistortedFusion\BladeComponents\Components\Bootstrap;

use Illuminate\View\Component;

class DropdownIcon extends Component
{
    public string $icon;

    /**
     * Create the component instance.
     *
     * @param string $icon
     */
    public function __construct(string $icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.bootstrap.dropdown-icon');
    }
}
