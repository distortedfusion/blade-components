<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $icon;
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string $icon
     * @param string $type
     *
     * @return void
     */
    public function __construct(string $icon, string $type = 'fad')
    {
        $this->icon = $icon;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.icon');
    }

    /**
     * Get the icon container class, conditionally add the default text and bg color
     * when they're not yet provided.
     *
     * @return string
     */
    public function iconContainerClass(): string
    {
        $attributesClass = Arr::get($this->attributes, 'class');

        $class = 'inline-flex items-center justify-center w-10 h-10 rounded';

        if (! Str::contains($attributesClass, 'text-')) {
            $class .= ' text-brand-100';
        }

        if (! Str::contains($attributesClass, 'bg-')) {
            $class .= ' bg-brand-500';
        }

        return $class;
    }
}
