<?php

namespace DistortedFusion\BladeComponents\Components\Layout;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class TitleBar extends Component
{
    /**
     * The routes with a potential previous route.
     *
     * @var array
     */
    protected static array $routesWithPrevious = ['create', 'edit'];

    /**
     * The routes using a narrow layout.
     *
     * @var array
     */
    protected static array $routesWithNarrowLayout = ['create', 'edit'];

    public ?string $title;
    public ?string $actions;
    public ?string $previousUrl;
    public ?string $icon;
    public bool $asHeading;

    /**
     * The previous icon.
     *
     * @var string|null
     */
    public ?string $previousIcon;

    /**
     * Default indicator icon.
     *
     * @var string
     */
    public static string $defaultPreviousIcon = 'heroicon-o-chevron-left';

    /**
     * Create a new component instance.
     *
     * @param ?string $title
     * @param ?string $actions
     * @param ?string $previousUrl
     * @param ?string $icon
     * @param bool    $asHeading
     * @param ?string $previousIcon
     */
    public function __construct(
        ?string $title = null,
        ?string $actions = null,
        ?string $previousUrl = null,
        ?string $icon = null,
        bool $asHeading = true,
        ?string $previousIcon = null,
    ) {
        $this->title = $title;
        $this->actions = $actions;
        $this->previousUrl = $previousUrl;
        $this->icon = $icon;
        $this->asHeading = $asHeading;

        $this->previousIcon = $previousIcon ?: $this->defaultPreviousIcon();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.layout.title-bar');
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

        if (! $this->currentRouteApplicableForPrevious()) {
            return null;
        }

        $current = Route::currentRouteName();
        $expected = Str::contains($current, 'create') ? 'index' : 'show';
        $route = Str::replace(static::$routesWithPrevious, $expected, $current);

        if (! Route::has($route)) {
            return null;
        }

        return route($route, Route::current()->parameters());
    }

    /**
     * Determine if the current route is applicable for a previous url.
     *
     * @return bool
     */
    public function currentRouteApplicableForPrevious(): bool
    {
        if (! ($current = Route::currentRouteName())) {
            return false;
        }

        return Str::contains($current, static::$routesWithPrevious);
    }

    /**
     * Determine if the current route is applicable for a previous url.
     *
     * @return bool
     */
    public function currentRouteApplicableForNarrowLayout(): bool
    {
        if (! ($current = Route::currentRouteName())) {
            return false;
        }

        return Str::contains($current, static::$routesWithNarrowLayout);
    }

    /**
     * Get the routes with a potential previous route.
     *
     * @return array
     */
    public static function getRoutesWithPrevious(): array
    {
        return static::$routesWithPrevious;
    }

    /**
     * Set the routes with a potential previous route.
     *
     * @param array $routes
     *
     * @return void
     */
    public static function setRoutesWithPrevious(array $routes): void
    {
        static::$routesWithPrevious = $routes;
    }

    /**
     * Get the routes using a narrow layout.
     *
     * @return array
     */
    public static function getRoutesWithNarrowLayout(): array
    {
        return static::$routesWithNarrowLayout;
    }

    /**
     * Set the routes with a narrow layout.
     *
     * @param array $routes
     *
     * @return void
     */
    public static function setRoutesWithNarrowLayout(array $routes): void
    {
        static::$routesWithNarrowLayout = $routes;
    }

    /**
     * Get the default previous icon.
     *
     * @return string|null
     */
    public static function defaultPreviousIcon(): ?string
    {
        return static::$defaultPreviousIcon;
    }

    /**
     * Set the default previous icon.
     *
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultPreviousIcon(string $icon): void
    {
        static::$defaultPreviousIcon = $icon;
    }
}
