<?php

namespace DistortedFusion\Tailwind\Components\Table;

class Heading extends Cell
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.table.heading');
    }
}
