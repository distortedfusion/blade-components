<?php

namespace DistortedFusion\Tailwind\Components\Form;

use ProtoneMedia\LaravelFormComponents\Components\FormCheckbox;

class Toggle extends FormCheckbox
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.form.toggle');
    }
}
