<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

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
        return view('blade-components::components.layout.section-title');
    }
}
