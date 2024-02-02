<?php

namespace DistortedFusion\BladeComponents\Components\Badges;

use Illuminate\View\Component;

class Index extends Component
{
    public string $style;
    public ?string $size;
    public ?string $icon;

    public function __construct(string $style = 'default', string $size = null, string $icon = null)
    {
        $this->style = $style;
        $this->size = $size;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.badges.index');
    }
}
