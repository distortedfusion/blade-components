<?php

namespace DistortedFusion\Tailwind\Components\Form;

use Illuminate\View\Component;

class Button extends Component
{
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
     * The button type.
     *
     * @var string
     */
    public string $type;

    /**
     * Create the component instance.
     *
     * @param string $action
     * @param string $type
     * @param string $method
     */
    public function __construct(string $action, string $type = 'default', string $method = 'POST')
    {
        $this->action = $action;
        $this->type = $type;
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
