<?php

namespace DistortedFusion\Tailwind\Components\Elements;

use Illuminate\View\Component;

class BooleanBadge extends Component
{
    public bool $state;
    public string $type;

    public function __construct(bool $state, string $type = 'default')
    {
        $this->state = $state;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.elements.boolean-badge');
    }
}
