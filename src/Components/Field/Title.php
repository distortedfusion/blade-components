<?php

namespace DistortedFusion\Tailwind\Components\Field;

use Illuminate\View\Component;

class Title extends Component
{
    /**
     * The component title.
     *
     * @var string
     */
    public string $title;

    /**
     * The component sub-title.
     *
     * @var string|null
     */
    public ?string $subTitle;

    /**
     * Create the component instance.
     *
     * @param string      $title
     * @param string|null $subTitle
     */
    public function __construct(string $title, string $subTitle = null)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.table.title');
    }
}
