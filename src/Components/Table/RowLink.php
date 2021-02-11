<?php

namespace DistortedFusion\Tailwind\Components\Table;

use Illuminate\View\Component;

class RowLink extends Component
{
    /**
     * The row link.
     *
     * @var string
     */
    public $link;

    /**
     * Create the component instance.
     *
     * @param string $link
     */
    public function __construct(string $link)
    {
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.table.row-link');
    }
}
