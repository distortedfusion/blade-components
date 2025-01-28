<?php

namespace DistortedFusion\BladeComponents\Components\Alert;

use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Default alert icons.
     *
     * @var array
     */
    public static array $defaultIcons = [
        'default' => 'heroicon-o-information-circle',
        'success' => 'heroicon-o-check-circle',
        'info' => 'heroicon-o-information-circle',
        'warning' => 'heroicon-o-exclamation-circle',
        'danger' => 'heroicon-o-x-circle',
    ];

    /**
     * The alert style.
     *
     * @var string
     */
    public string $style;

    /**
     * The alert title.
     *
     * @var string|null
     */
    public ?string $title;

    /**
     * The alert icon.
     *
     * @var string|null
     */
    public ?string $icon;

    /**
     * Create the component instance.
     *
     * @param string|null $title
     * @param string      $style
     * @param string|null $icon
     */
    public function __construct(?string $title = null, string $style = 'default', ?string $icon = null)
    {
        $this->title = $title;
        $this->style = $style;
        $this->icon = $icon ?: $this->defaultIconForStyle($style);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.alert.index');
    }

    /**
     * Get the default icon for the alert style.
     *
     * @param string $style
     *
     * @return string|null
     */
    public static function defaultIconForStyle(string $style): ?string
    {
        if (array_key_exists($style, static::$defaultIcons)) {
            return static::$defaultIcons[$style];
        }

        return null;
    }

    /**
     * Set the default icon for the supplied alert style.
     *
     * @param string $style
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultIconForStyle(string $style, string $icon): void
    {
        static::$defaultIcons[$style] = $icon;
    }

    /**
     * Set the default icons for the supplied alert style.
     *
     * @param array $icons
     *
     * @return void
     */
    public static function setDefaultIcons(array $icons): void
    {
        foreach ($icons as $style => $icon) {
            static::setDefaultIconForStyle($style, $icon);
        }
    }
}
