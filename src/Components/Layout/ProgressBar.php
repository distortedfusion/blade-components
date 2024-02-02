<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

use Illuminate\View\Component;

class ProgressBar extends Component
{
    public int $progress;
    public ?string $size;

    /**
     * Create a new component instance.
     *
     * @param int         $progress
     * @param bool        $spinner
     * @param string|null $size
     */
    public function __construct(int $progress, string $size = null)
    {
        $this->progress = $progress;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.layout.progress-bar');
    }
}
