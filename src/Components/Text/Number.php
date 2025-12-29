<?php

namespace DistortedFusion\BladeComponents\Components\Text;

use Closure;
use DistortedFusion\BladeComponents\Components\Concerns\LocalizesFormattedNumbers;
use Illuminate\View\Component;

class Number extends Component
{
    use LocalizesFormattedNumbers;

    public float $value;
    public int $precision;
    public ?string $unit;

    public function __construct(float $value, int $precision = 0, ?string $unit = null)
    {
        $this->value = $value;
        $this->precision = $precision;
        $this->unit = $unit;
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
