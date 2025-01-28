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
        'success' => 'heroicon-o-check-circle',
        'info' => 'heroicon-o-information-circle',
        'warning' => 'heroicon-o-exclamation-circle',
        'danger' => 'heroicon-o-x-circle',
    ];

    /**
     * The alert type.
     *
     * @var string
     */
    public string $type;

    /**
     * The alert title.
     *
     * @var string|null
     */
    public ?string $title;

    /**
     * The alert icon.
     *
     * @var string
     */
    public string $icon;

    /**
     * Create the component instance.
     *
     * @param string|null $title
     * @param string      $type
     * @param string|null $icon
     */
    public function __construct(?string $title = null, string $type = 'default', ?string $icon = null)
    {
        $this->title = $title;
        $this->type = $type;
        $this->icon = $icon ?: $this->defaultIconForType($type);
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
     * Get the default icon for the alert type.
     *
     * @param string $type
     *
     * @return string
     */
    public static function defaultIconForType(string $type): string
    {
        if (array_key_exists($type, static::$defaultIcons)) {
            return static::$defaultIcons[$type];
        }

        return 'heroicon-o-information-circle';
    }

    /**
     * Set the default icon for the supplied alert type.
     *
     * @param string $type
     * @param string $icon
     *
     * @return void
     */
    public static function setDefaultIconForType(string $type, string $icon): void
    {
        static::$defaultIcons[$type] = $icon;
    }

    /**
     * Set the default icons for the supplied alert types.
     *
     * @param array $icons
     *
     * @return void
     */
    public static function setDefaultIcons(array $icons): void
    {
        foreach ($icons as $type => $icon) {
            static::setDefaultIconForType($type, $icon);
        }
    }
}
