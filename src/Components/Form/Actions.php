<?php

namespace DistortedFusion\Tailwind\Components\Form;

use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;

class Actions extends Component
{
    public string $cancel;
    public bool $redirectPrevious;

    /**
     * Create a new component instance.
     *
     * @param string $cancel
     * @param bool   $redirectPrevious
     */
    public function __construct(string $cancel, bool $redirectPrevious = false)
    {
        $this->cancel = $cancel;
        $this->redirectPrevious = $redirectPrevious;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.form.actions');
    }

    /**
     * Determine the cancel URL, when redirect previous is provided we'll check
     * the previous URL with the current URL and when they don't match we'll
     * prefer the previous URL.
     *
     * @return string
     */
    public function cancelUrl(): string
    {
        if (! $this->redirectPrevious) {
            return $this->cancel;
        }

        $previous = URL::previous();

        return $previous && $previous !== URL::current() ? $previous : $this->cancel;
    }
}
