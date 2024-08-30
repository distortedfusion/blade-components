<?php

namespace DistortedFusion\BladeComponents\Components\Bootstrap;

use Closure;

class ModalConfirmation extends Modal
{
    public const DEFAULT_STYLE = 'default';

    /**
     * Default alert icons.
     *
     * @var array
     */
    public const DEFAULT_ICONS = [
        'default' => 'fal-info',
        'success' => 'fal-check',
        'info' => 'fal-info',
        'warning' => 'fal-exclamation',
        'danger' => 'fal-exclamation',
    ];

    public ?string $style;
    public string $icon;

    /**
     * Create a new component instance.
     *
     * @param string      $id
     * @param string|null $size
     * @param string|null $style
     * @param string|null $icon
     */
    public function __construct(string $id, ?string $size = null, ?string $style = null, ?string $icon = null)
    {
        $this->style = $style;
        $this->icon = $icon ?: $this->defaultIconForStyle($style);

        parent::__construct($id, $size);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.bootstrap.modal-confirmation');
    }

    /**
     * Get the default icon for the style.
     *
     * @param string|null $style
     *
     * @return string
     */
    protected function defaultIconForStyle(?string $style = null): string
    {
        if (! is_null($style) && array_key_exists($style, self::DEFAULT_ICONS)) {
            return self::DEFAULT_ICONS[$style];
        }

        return self::DEFAULT_ICONS[self::DEFAULT_STYLE];
    }
}
