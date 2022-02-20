<?php

namespace DistortedFusion\Tailwind\Components\Layouts;

class Guest extends AppBase
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layouts.guest');
    }
}
