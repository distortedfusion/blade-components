<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Closure;
use Illuminate\View\Component;

class EmptyState extends Component
{
    public string $title;
    public string $description;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $description
     */
    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.empty-state');
    }
}
