<?php

namespace DistortedFusion\BladeComponents\Components\Btn;

use Closure;
use Illuminate\View\Component;

class Index extends Component
{
    public ?string $href;
    public string $style;
    public ?string $size;
    public ?string $alignment;

    public string $type;
    public bool $disabled;

    public function __construct(?string $href = null, string $style = 'primary', ?string $size = null, ?string $alignment = null, string $type = 'button', bool $disabled = false)
    {
        $this->href = $href;
        $this->style = $style;
        $this->size = $size;
        $this->alignment = $alignment;

        $this->type = $type;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.btn.index');
    }
}
