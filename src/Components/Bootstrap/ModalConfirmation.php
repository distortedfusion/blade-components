<?php

namespace DistortedFusion\Tailwind\Components\Bootstrap;

use Closure;

class ModalConfirmation extends Modal
{
    public const DEFAULT_STYLE = 'default';
    public const STYLES = [
        'default' => 'bg-gray-100 text-gray-600',
        'success' => 'bg-green-100 text-green-600',
        'info' => 'bg-blue-100 text-blue-600',
        'warning' => 'bg-yellow-100 text-yellow-600',
        'danger' => 'bg-red-100 text-red-600',
    ];

    /**
     * Default alert icons.
     *
     * @var array
     */
    public const DEFAULT_ICONS = [
        'default' => 'fas-info',
        'success' => 'fas-check',
        'info' => 'fas-info',
        'warning' => 'fas-exclamation',
        'danger' => 'fas-exclamation',
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
    public function __construct(string $id, string $size = null, string $style = null, string $icon = null)
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
        return view('tailwind-layout::components.bootstrap.modal-confirmation');
    }

    /**
     * Get the icon container class for the style.
     *
     * @return string
     */
    public function iconContainerClass(): string
    {
        if (! is_null($this->style) && array_key_exists($this->style, self::STYLES)) {
            return self::STYLES[$this->style];
        }

        return self::STYLES[self::DEFAULT_STYLE];
    }

    /**
     * Get the default icon for the style.
     *
     * @param string|null $style
     *
     * @return string
     */
    protected function defaultIconForStyle(string $style = null): string
    {
        if (! is_null($style) && array_key_exists($style, self::DEFAULT_ICONS)) {
            return self::DEFAULT_ICONS[$style];
        }

        return self::DEFAULT_ICONS[self::DEFAULT_STYLE];
    }
}
