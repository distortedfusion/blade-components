<?php

namespace DistortedFusion\BladeComponents\Components\Text;

use Closure;
use Illuminate\View\Component;

class Paragraph extends Component
{
    public ?string $size;

    public function __construct(?string $size = null)
    {
        $this->size = $size;
    }

    /**
     * Get the view / view contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.text.paragraph');
    }
}
