<?php

namespace DistortedFusion\Tailwind\Components\DateTime;

use Carbon\Carbon as CarbonAlias;
use Carbon\CarbonInterface;
use DateTimeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carbon extends Component
{
    protected static string $defaultFormat = 'M j, Y \&\m\d\a\s\h\; H:i:s';

    public CarbonInterface $date;

    public string $format;

    public bool $human;

    public function __construct(
        DateTimeInterface $date,
        string $format = null,
        bool $human = false
    ) {
        $this->date = CarbonAlias::instance($date);
        $this->format = $format ?: static::getDefaultFormat();
        $this->human = $human;
    }

    public function render(): View
    {
        return view('tailwind-layout::components.date-time.carbon');
    }

    /**
     * Get the default date time format.
     *
     * @return string
     */
    public static function getDefaultFormat(): string
    {
        return static::$defaultFormat;
    }

    /**
     * Set the default date time format.
     *
     * @param string $format
     *
     * @return void
     */
    public static function setDefaultFormat(string $format): void
    {
        static::$defaultFormat = $format;
    }
}
