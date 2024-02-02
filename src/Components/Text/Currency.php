<?php

namespace DistortedFusion\BladeComponents\Components\Text;

use Closure;
use Illuminate\View\Component;
use NumberFormatter;

class Currency extends Component
{
    public float $value;
    public string $currency;
    public string $locale;

    /**
     * Create a new component instance.
     *
     * @param float  $value
     * @param string $currency
     * @param string $locale
     *
     * @return void
     */
    public function __construct(float $value, string $currency = 'EUR', string $locale = 'nl_NL')
    {
        $this->value = $value;
        $this->currency = $currency;
        $this->locale = $locale;
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
        $formatter = new NumberFormatter($this->locale, NumberFormatter::CURRENCY);

        return $formatter->formatCurrency($this->value, $this->currency);
    }
}
