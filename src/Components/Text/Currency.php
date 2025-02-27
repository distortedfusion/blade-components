<?php

namespace DistortedFusion\BladeComponents\Components\Text;

use Closure;
use DistortedFusion\BladeComponents\Components\Concerns\LocalizesFormattedNumbers;
use Illuminate\View\Component;

class Currency extends Component
{
    use LocalizesFormattedNumbers;

    public float $value;
    public string $currency;

    public function __construct(float $value, string $currency = 'EUR')
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.text.currency');
    }

    /**
     * Format the data according to the system settings.
     *
     * @return string|null
     */
    public function formattedData(): ?string
    {
        return $this->getCurrencyFormatter(
            precision: 2
        )->format($this->value);
    }
}
