<?php

namespace DistortedFusion\BladeComponents\Components\ListGroup;

use Closure;

class ItemButton extends Item
{
    public string $type;
    public ?string $icon;

    public function __construct(?string $title = null, string $align = 'left', ?string $icon = 'fal-chevron-right', string $type = 'button')
    {
        parent::__construct($title, $align);

        $this->icon = $icon;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.list-group.item-button');
    }
}
