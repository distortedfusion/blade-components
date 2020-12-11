<?php

namespace DistortedFusion\Tailwind\Components\Bootstrap;

use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * The dropdown actions.
     *
     * @var array
     */
    public array $actions;

    /**
     * The button title.
     *
     * @var string|null
     */
    public ?string $title = null;

    /**
     * The menu placement.
     *
     * @var string
     */
    public string $placement;

    /**
     * The dropdown variant.
     *
     * @var string|null
     */
    public ?string $variant;

    /**
     * Create the component instance.
     *
     * @param array       $actions
     * @param string|null $title
     * @param string      $placement
     * @param string|null $variant
     */
    public function __construct(array $actions, string $title = null, string $placement = 'right', string $variant = null)
    {
        $this->actions = $actions;
        $this->title = $title;
        $this->placement = $placement;
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.bootstrap.dropdown');
    }
}
