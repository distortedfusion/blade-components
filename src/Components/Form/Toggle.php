<?php

namespace DistortedFusion\Tailwind\Components\Form;

use ProtoneMedia\LaravelFormComponents\Components\FormCheckbox;

class Toggle extends FormCheckbox
{
    public bool $disabled;

    public function __construct(
        string $name,
        string $label = '',
        $value = 1,
        $bind = null,
        bool $default = false,
        bool $showErrors = true,
        bool $disabled = false
    ) {
        parent::__construct($name, $label, $value, $bind, $default, $showErrors);

        $this->disabled = $disabled;
    }

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
