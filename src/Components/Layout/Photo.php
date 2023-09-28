<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Closure;
use Illuminate\View\Component;

class Photo extends Component
{
    public ?string $url;
    public string $icon;
    public ?string $size;

    /**
     * Create a new component instance.
     *
     * @param string|null $url
     * @param string      $icon
     * @param string|null $size
     */
    public function __construct(string $url = null, string $icon = 'fal-user', string $size = null)
    {
        $this->url = $url;
        $this->icon = $icon;
        $this->size = $size;
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
