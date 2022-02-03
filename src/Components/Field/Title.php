<?php

namespace DistortedFusion\Tailwind\Components\Field;

use Illuminate\View\Component;

class Title extends Component
{
    public ?string $title;
    public ?string $subTitle;
    public bool $truncate;

    /**
     * Create the component instance.
     *
     * @param string|null $title
     * @param string|null $subTitle
     * @param bool        $truncate
     */
    public function __construct(string $title = null, string $subTitle = null, bool $truncate = true)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->truncate = $truncate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.field.title');
    }
}
