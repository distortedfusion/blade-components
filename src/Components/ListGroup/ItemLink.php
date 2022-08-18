<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

class ItemLink extends Item
{
    public string $url;

    /**
     * Create a new component instance.
     *
     * @param string      $url
     * @param string|null $title
     * @param string      $align
     */
    public function __construct(string $url, string $title = null, string $align = 'left')
    {
        parent::__construct($title, $align);

        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.item-link');
    }
}
