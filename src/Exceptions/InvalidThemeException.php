<?php

namespace DistortedFusion\BladeComponents\Exceptions;

use DistortedFusion\BladeComponents\Contracts\ThemeContract;
use InvalidArgumentException;

class InvalidThemeException extends InvalidArgumentException
{
    public function __construct()
    {
        $contract = ThemeContract::class;

        parent::__construct("Themes must implement the [{$contract}] interface.");
    }
}
