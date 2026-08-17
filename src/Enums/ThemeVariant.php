<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Enums;

enum ThemeVariant
{
    case LIGHT;
    case DARK;

    public function selector(): ?string
    {
        return match ($this) {
            self::DARK => '.dark, .inverse',
            default => ':root, .dark .inverse',
        };
    }
}
