<?php

namespace DistortedFusion\Tailwind\Components\Bootstrap;

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
        return view('tailwind-layout::components.bootstrap.modal-dialog');
    }
}
