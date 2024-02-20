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
    public const DEFAULT_ICONS = [
        'success' => 'fal-circle-check',
        'info' => 'fal-circle-info',
        'warning' => 'fal-triangle-exclamation',
        'danger' => 'fal-hexagon-exclamation',
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
    protected function defaultIconForType(string $type): string
    {
        if (array_key_exists($type, self::DEFAULT_ICONS)) {
            return self::DEFAULT_ICONS[$type];
        }

        return 'fal-circle-info';
    }
}
