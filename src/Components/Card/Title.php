<?php

namespace DistortedFusion\Tailwind\Components\Card;

use DistortedFusion\Tailwind\Components\Layout\Heading;

class Title extends Heading
{
    /**
     * Create the component instance.
     *
     * @param int $headingLevel
     */
    public function __construct(int $headingLevel = 3)
    {
        $this->headingLevel = $headingLevel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.card.title');
    }
}
