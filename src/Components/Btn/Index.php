<?php

namespace DistortedFusion\Tailwind\Components\Btn;

use Closure;
use Illuminate\View\Component;

class Index extends Component
{
    public ?string $href;
    public string $type;
    public string $style;
    public ?string $size;

    public function __construct(string $href = null, string $type = 'button', string $style = 'primary', ?string $size = null)
    {
        $this->href = $href;
        $this->type = $type;
        $this->style = $style;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.btn.index');
    }
}
