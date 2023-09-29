<?php

namespace DistortedFusion\Tailwind\Components\Text;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Heading extends Component
{
    public int $headingLevel;
    public bool $asHeading;

    public function __construct(int $headingLevel = 1, bool $asHeading = true)
    {
        $this->headingLevel = $headingLevel;
        $this->asHeading = $asHeading;
    }

    /**
     * Get the view / view contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.text.heading');
    }

    /**
     * Fetch the slugged title variant for the ID property.
     *
     * @return string
     */
    public function id(): string
    {
        $slot = $this->factory()->getConsumableComponentData('slot');

        return Str::slug($slot);
    }
}
