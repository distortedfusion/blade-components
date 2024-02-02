<?php

namespace DistortedFusion\BladeComponents\Components\ListGroup;

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
        return view('blade-components::components.list-group.index');
    }
}
