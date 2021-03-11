<?php

namespace DistortedFusion\Tailwind\Components\Field;

use Illuminate\View\Component;

class Boolean extends Component
{
    /**
     * The component state.
     *
     * @var bool
     */
    public bool $state;

    /**
     * Create the component instance.
     *
     * @param bool $state
     */
    public function __construct(bool $state)
    {
        $this->state = $state;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.field.boolean');
    }
}
