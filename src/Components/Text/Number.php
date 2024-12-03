<?php

namespace DistortedFusion\BladeComponents\Components\Text;

use Closure;
use DistortedFusion\BladeComponents\Concerns\LocalizesFormattedNumbers;
use Illuminate\View\Component;

class Number extends Component
{
    use LocalizesFormattedNumbers;

    public float $value;
    public int $precision;

    public function __construct(float $value, int $precision = 0)
    {
        $this->value = $value;
        $this->precision = $precision;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('blade-components::components.text.number');
    }

    /**
     * Format the data according to the system settings.
     *
     * @return string|null
     */
    public function formattedData(): ?string
    {
        return $this->getDecimalNumberFormatter(
            precision: $this->precision
        )->format($this->value);
    }
}
