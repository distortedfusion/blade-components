<?php

namespace DistortedFusion\Tailwind\Components\Table;

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
        return view('tailwind-layout::components.table.row-group');
    }
}
