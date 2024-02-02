<?php

namespace DistortedFusion\BladeComponents\Components\Bootstrap;

use Closure;
use Illuminate\View\Component;

class Modal extends Component
{
    public const SIZES = [
        'sm' => 'modal-sm',
        'lg' => 'modal-lg',
        'xl' => 'modal-xl',
    ];

    public string $id;
    public ?string $size;

    /**
     * Create a new component instance.
     *
     * @param string      $id
     * @param string|null $size
     */
    public function __construct(string $id, string $size = null)
    {
        $this->id = $id;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.bootstrap.modal');
    }

    /**
     * Get the modal dialog class including its size.
     *
     * @return array
     */
    public function modalDialogClasses(): array
    {
        $classes = ['modal-dialog', 'modal-dialog-centered'];

        if (! is_null($this->size) && \array_key_exists($this->size, self::SIZES)) {
            return array_merge($classes, [self::SIZES[$this->size]]);
        }

        return $classes;
    }
}
