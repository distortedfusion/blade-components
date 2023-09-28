<?php

namespace DistortedFusion\Tailwind\Components\Badges;

use Illuminate\View\Component;

class Index extends Component
{
    public string $style;
    public ?string $size;

    public function __construct(string $style = 'default', string $size = null)
    {
        $this->style = $style;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.badges.index');
    }
}
