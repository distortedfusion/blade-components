<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * The cell text alignment.
     *
     * @var string
     */
    public string $align;

    public ?string $title;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string      $align
     */
    public function __construct(string $title = null, string $align = 'left')
    {
        $this->title = $title;
        $this->align = $align;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.item');
    }
}
