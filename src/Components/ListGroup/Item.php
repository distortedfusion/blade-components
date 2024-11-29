<?php

namespace DistortedFusion\BladeComponents\Components\ListGroup;

use Closure;
use Illuminate\View\Component;

class Item extends Component
{
    public ?string $title;
    public string $align;
    public bool $vertical;

    public function __construct(?string $title = null, string $align = 'left', bool $vertical = false)
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
        return view('blade-components::components.list-group.item');
    }
}
