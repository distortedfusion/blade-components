<?php

namespace DistortedFusion\Tailwind\Components\Layout;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class TitleBar extends Component
{
    public ?string $title;
    public ?string $actions;
    public ?string $previousUrl;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string|null $actions
     * @param string|null $previousUrl
     */
    public function __construct(string $title = null, string $actions = null, string $previousUrl = null)
    {
        $this->title = $title;
        $this->actions = $actions;
        $this->previousUrl = $previousUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tailwind-layout::components.layout.title-bar');
    }

    /**
     * Determine the previous URL based on the current route name.
     *
     * We're assuming the create and edit page always has a related index.
     *
     * @return string|null
     */
    public function getPreviousUrl(): ?string
    {
        if (! is_null($this->previousUrl)) {
            return $this->previousUrl;
        }

        if (! ($currentRouteName = Route::currentRouteName())) {
            return null;
        }

        if (! Str::contains($currentRouteName, ['create', 'edit'])) {
            return null;
        }

        $expectedRoute = Str::replace(['create', 'edit'], 'index', $currentRouteName);

        return Route::has($expectedRoute) ? route($expectedRoute) : null;
    }
}
