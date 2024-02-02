<?php

namespace DistortedFusion\BladeComponents\Components\Card;

use Closure;
use Illuminate\View\Component;

class Index extends Component
{
    public string $style;

    public function __construct(string $style = 'default')
    {
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.card.index');
    }
}
