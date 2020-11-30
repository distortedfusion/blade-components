<?php

namespace DistortedFusion\Tailwind\Components\Table;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * The loop variable.
     *
     * @var mixed
     */
    public $loop;

    /**
     * Create the component instance.
     *
     * @param mixed|null $loop
     */
    public function __construct($loop = null)
    {
        $this->loop = $loop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.table.row');
    }
}
