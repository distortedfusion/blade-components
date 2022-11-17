<?php

namespace DistortedFusion\Tailwind\Components\Elements;

use Illuminate\View\Component;

class Badge extends Component
{
    public string $type;

    public function __construct(string $type = 'default')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.elements.badge');
    }
}
