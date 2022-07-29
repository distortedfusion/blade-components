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
     */
    public function __construct(string $url, string $title = null)
    {
        parent::__construct($title);

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
