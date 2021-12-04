<?php

namespace DistortedFusion\Tailwind\Components\Card;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Title extends Component
{
    public string $title;
    public int $headingLevel;

    /**
     * Create the component instance.
     *
     * @param string $title
     * @param int    $headingLevel
     */
    public function __construct(string $title, int $headingLevel = 3)
    {
        $this->title = $title;
        $this->headingLevel = $headingLevel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.card.title');
    }

    /**
     * Fetch the slugged title variant for the ID property.
     *
     * @return string
     */
    public function id(): string
    {
        return Str::slug($this->title);
    }
}
