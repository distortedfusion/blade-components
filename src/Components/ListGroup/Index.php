<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Closure;
use Illuminate\View\Component;

class Index extends Component
{
    public bool $flush;

    public function __construct(bool $flush = false)
    {
        $this->flush = $flush;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.index');
    }
}
