<?php

namespace DistortedFusion\Tailwind\Components\Loading;

use Illuminate\View\Component;

class Bar extends Component
{
    public $percentage;
    public $spinner;
    public string $color;

    /**
     * Create a new component instance.
     *
     * @param int    $percentage
     * @param bool   $spinner
     * @param string $color
     */
    public function __construct(int $percentage, bool $spinner = false, string $color = 'brand-500')
    {
        $this->percentage = $percentage;
        $this->spinner = $spinner;
        $this->color = $color;
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
