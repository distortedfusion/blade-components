<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Closure;
use Illuminate\View\Component;

class Item extends Component
{
    public ?string $title;
    public string $align;
    public bool $vertical;

    public function __construct(string $title = null, string $align = 'left', bool $vertical = false)
    {
        $this->title = $title;
        $this->align = $align;
        $this->vertical = $vertical;
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
