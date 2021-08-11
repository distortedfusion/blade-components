<?php

namespace DistortedFusion\Tailwind\Components\Form;

use Illuminate\View\Component;

class Section extends Component
{
    public ?string $title;
    public ?string $description;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string|null $description
     */
    public function __construct(string $title = null, string $description = null)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.field.section');
    }
}
