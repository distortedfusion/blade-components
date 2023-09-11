<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Closure;

class ItemLink extends Item
{
    public string $href;
    public ?string $icon;

    public function __construct(string $href, string $title = null, string $align = 'left', ?string $icon = 'fas-chevron-right')
    {
        parent::__construct($title, $align);

        $this->href = $href;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.item-link');
    }
}
