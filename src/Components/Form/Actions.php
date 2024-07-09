<?php

namespace DistortedFusion\BladeComponents\Components\Form;

use Closure;
use DistortedFusion\BladeForms\Components\Concerns\InteractsWithAttributes;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;

class Actions extends Component
{
    use InteractsWithAttributes;

    public ?string $cancel;
    public bool $redirectPrevious;
    public ?string $cancelTitle;
    public ?string $submitTitle;
    public string $style;

    /**
     * Create a new component instance.
     *
     * @param string|null $cancel
     * @param bool        $redirectPrevious
     * @param string|null $cancelTitle
     * @param string|null $submitTitle
     * @param string      $style
     */
    public function __construct(
        ?string $cancel = null,
        bool $redirectPrevious = false,
        ?string $cancelTitle = null,
        ?string $submitTitle = null,
        string $style = 'primary'
    ) {
        $this->cancel = $cancel;
        $this->redirectPrevious = $redirectPrevious;
        $this->cancelTitle = $cancelTitle;
        $this->submitTitle = $submitTitle;
        $this->style = $style;
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

    /**
     * Get the view / view contents that represent the component.
     *
     * @return View|Htmlable|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.form.actions');
    }
}
