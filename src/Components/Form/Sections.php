<?php

namespace DistortedFusion\Tailwind\Components\Form;

use Illuminate\View\Component;

class Sections extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.form.sections');
    }
}
