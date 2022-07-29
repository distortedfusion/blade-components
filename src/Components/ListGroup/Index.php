<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.index');
    }
}
