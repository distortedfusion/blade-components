<?php

namespace DistortedFusion\BladeComponents\Enums;

enum ThemeVariant
{
    case LIGHT;
    case DARK;

    public function bladeColorTheme(): ?string
    {
        return match ($this) {
            self::DARK => 'dark',
            default => null,
        };
    }
}
