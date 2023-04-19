<?php

namespace DistortedFusion\Tailwind\Components\Loading;

use Illuminate\View\Component;

class Bar extends Component
{
    public $percentage;
    public $spinner;

    /**
     * Create a new component instance.
     *
     * @param int  $percentage
     * @param bool $spinner
     */
    public function __construct(int $percentage, bool $spinner = false)
    {
        $this->percentage = $percentage;
        $this->spinner = $spinner;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.loading.bar');
    }
}
