<?php

namespace DistortedFusion\Tailwind\Components\Bootstrap;

use Illuminate\View\Component;

class DropdownAction extends Component
{
    public ?string $action;
    public array $inputs;
    public string $method;
    public bool $show;

    public function __construct(string $action = null, array $inputs = [], string $method = 'GET', bool $show = true)
    {
        $this->action = $action;
        $this->inputs = $inputs;
        $this->method = strtoupper($method);
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.bootstrap.dropdown-action');
    }
}
