<?php

namespace DistortedFusion\BladeComponents\Components\Bootstrap;

use Closure;

class ModalDialog extends Modal
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.bootstrap.modal-dialog');
    }
}
