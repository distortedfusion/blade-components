<?php

namespace DistortedFusion\Tailwind\Components\Tables;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.tables.row');
    }
}
