<?php

namespace DistortedFusion\Tailwind\Components\Form;

use Illuminate\View\Component;

class SelectDescription extends Component
{
    public string $entity;
    public bool $after;

    /**
     * Create a new component instance.
     *
     * @param string $entity
     * @param bool   $after
     */
    public function __construct(
        string $entity = '&rdca;',
        bool $after = false
    ) {
        $this->entity = $entity;
        $this->after = $after;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        return view('tailwind-layout::components.form.select-description');
    }
}
