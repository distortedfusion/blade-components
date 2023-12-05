<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Illuminate\View\Component;

class SectionTitle extends Component
{
    public int $headingLevel;

    /**
     * Create the component instance.
     *
     * @param int $headingLevel
     */
    public function __construct(int $headingLevel = 2)
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
        return view('tailwind-layout::components.layout.section-title');
    }
}
