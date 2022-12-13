<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Closure;
use Illuminate\View\Component;

class PageAction extends Component
{
    public string $href;
    public bool $disabled;

    /**
     * Create a new component instance.
     *
     * @param string $href
     * @param bool   $disabled
     */
    public function __construct(string $href, bool $disabled = false)
    {
        $this->href = $href;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.page-action');
    }
}
