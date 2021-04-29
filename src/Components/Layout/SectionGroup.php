<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class SectionGroup extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.section-group');
    }
}
