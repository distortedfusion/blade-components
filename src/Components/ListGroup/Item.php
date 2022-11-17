<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Closure;
use Illuminate\View\Component;

class Item extends Component
{
    public ?string $title;
    public string $align;

    public function __construct(string $title = null, string $align = 'left')
    {
        $this->title = $title;
        $this->align = $align;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.item');
    }
}
