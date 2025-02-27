<?php

namespace DistortedFusion\BladeComponents\Components\Concerns;

use Illuminate\Support\Facades\App;
use NumberFormatter;

trait LocalizesFormattedNumbers
{
    public function getCurrencyFormatter(int $precision = 0, ?string $locale = null): NumberFormatter
    {
        $formatter = new NumberFormatter($locale ?: App::getLocale(), NumberFormatter::CURRENCY);
        $formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, 'EUR');
        $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $precision);

        return $formatter;
    }

    public function getDecimalNumberFormatter(int $precision = 0, ?string $locale = null): NumberFormatter
    {
        $formatter = new NumberFormatter($locale ?: App::getLocale(), NumberFormatter::DECIMAL);
        $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $precision);

        return $formatter;
    }

    public function getPercentageFormatter(int $precision = 0, ?string $locale = null): NumberFormatter
    {
        $formatter = new NumberFormatter($locale ?: App::getLocale(), NumberFormatter::PERCENT);
        $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $precision);

        return $formatter;
    }
}
