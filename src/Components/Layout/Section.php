<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Section extends Component
{
    public string $title;
    public ?string $description = null;
    public bool $vertical;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string|null $description
     * @param bool $vertical
     */
    public function __construct(string $title, string $description = null, bool $vertical = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->vertical = $vertical;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.section');
    }

    /**
     * Get the section ID based on the title.
     *
     * Used for linking to sections using anchors.
     *
     * @return string
     */
    public function getSectionId(): string
    {
        return Str::slug($this->title);
    }
}
