<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

use Closure;
use Illuminate\View\Component;

class EmptyState extends Component
{
    public string $title;
    public bool $asHeading;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string|null $actions
     * @param string|null $previousUrl
     * @param string|null $icon
     * @param bool        $asHeading
     */
    public function __construct(string $title, bool $asHeading = true)
    {
        $this->title = $title;
        $this->asHeading = $asHeading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.layout.empty-state');
    }
}
