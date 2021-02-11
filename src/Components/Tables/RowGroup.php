<?php

namespace DistortedFusion\Tailwind\Components\Tables;

use Illuminate\View\Component;

class RowGroup extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.tables.row-group');
    }
}
