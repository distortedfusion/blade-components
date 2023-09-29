<?php

namespace DistortedFusion\Tailwind\Components\Card;

use DistortedFusion\Tailwind\Components\Text\Heading;

class Title extends Heading
{
    /**
     * Create the component instance.
     *
     * @param int  $headingLevel
     * @param bool $asHeading
     */
    public function __construct(int $headingLevel = 3, bool $asHeading = true)
    {
        parent::__construct($headingLevel, $asHeading);
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
