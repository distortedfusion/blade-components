<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

use Closure;

class ItemLink extends Item
{
    public string $url;
    public ?string $icon;

    public function __construct(string $url, string $title = null, string $align = 'left', string $icon = null)
    {
        parent::__construct($title, $align);

        $this->url = $url;
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
