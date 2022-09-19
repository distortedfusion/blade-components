<?php

namespace DistortedFusion\Tailwind\Components\ListGroup;

class ItemButton extends Item
{
    public string $type;
    public ?string $icon;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string      $align
     * @param string|null $icon
     * @param string      $type
     */
    public function __construct(string $title = null, string $align = 'left', string $icon = null, string $type = 'button')
    {
        parent::__construct($title, $align);

        $this->icon = $icon;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.list-group.item-button');
    }
}
