<?php

namespace DistortedFusion\Tailwind\Components\Form;

use DistortedFusion\Tailwind\Concerns\ButtonStyling;
use Illuminate\View\Component;

class Button extends Component
{
    use ButtonStyling;

    /**
     * The form action.
     *
     * @var string
     */
    public string $action;

    /**
     * The form method.
     *
     * @var string
     */
    public string $method;

    /**
     * The button style.
     *
     * @var string
     */
    public string $style;

    /**
     * Create the component instance.
     *
     * @param string $action
     * @param string $style
     * @param string $method
     */
    public function __construct(string $action, string $style = 'default', string $method = 'POST')
    {
        $this->action = $action;
        $this->style = $style;
        $this->method = strtoupper($method);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.form.button');
    }
}
