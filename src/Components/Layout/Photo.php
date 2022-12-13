<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Closure;
use Illuminate\View\Component;

class Photo extends Component
{
    public ?string $url;
    public string $icon;

    /**
     * Create a new component instance.
     *
     * @param string|null $url
     * @param string      $icon
     */
    public function __construct(string $url = null, string $icon = 'fad-user')
    {
        $this->url = $url;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.photo');
    }

    public function getPhotoStyle(): string
    {
        return sprintf('background-image: url("%s")', $this->url);
    }
}
