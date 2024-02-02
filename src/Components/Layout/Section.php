<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Section extends Component
{
    public string $title;
    public ?string $description = null;
    public ?string $action = null;
    public bool $vertical;

    /**
     * Create a new component instance.
     *
     * @param string      $title
     * @param string|null $description
     * @param bool        $vertical
     * @param string|null $action
     */
    public function __construct(string $title, string $description = null, string $action = null, bool $vertical = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->action = $action;
        $this->vertical = $vertical;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.layout.section');
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
