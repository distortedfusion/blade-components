<?php

namespace DistortedFusion\BladeComponents\Themes;

use DistortedFusion\BladeComponents\Contracts\ThemeContract;
use DistortedFusion\BladeComponents\Enums\ThemeVariable;
use DistortedFusion\BladeComponents\Enums\ThemeVariant;

class DefaultTheme implements ThemeContract
{
    /**
     * {@inheritDoc}
     */
    public static function bladeColorDefinitions(ThemeVariant $variant): array
    {
        return match ($variant) {
            ThemeVariant::DARK => static::darkColors(),
            default => static::lightColors(),
        };
    }

    private static function lightColors(): array
    {
        return [
            ThemeVariable::BACKGROUND->value => 'oklch(1 0 0)', // white
            ThemeVariable::FOREGROUND->value => 'oklch(20.5% 0 0)', // neutral-900

            ThemeVariable::PRIMARY->value => 'oklch(0 0 0)', // black
            ThemeVariable::PRIMARY_FOREGROUND->value => 'oklch(1 0 0)', // white

            ThemeVariable::SECONDARY->value => 'oklch(97% 0 0)', // neutral-100
            ThemeVariable::SECONDARY_FOREGROUND->value => 'var(--foreground)',

            ThemeVariable::ACCENT->value => 'var(--secondary)',
            ThemeVariable::ACCENT_FOREGROUND->value => 'var(--secondary-foreground)',

            ThemeVariable::MUTED->value => 'var(--secondary)',
            ThemeVariable::MUTED_FOREGROUND->value => 'oklch(43.9% 0 0)', // neutral-600

            ThemeVariable::CARD->value => 'var(--background)',
            ThemeVariable::CARD_FOREGROUND->value => 'var(--foreground)',

            ThemeVariable::BORDER->value => 'color-mix(in oklab, oklch(0 0 0) 10%, transparent)', // black/10
            ThemeVariable::INPUT->value => 'var(--border)',
            ThemeVariable::RING->value => 'var(--primary)',

            ThemeVariable::SUCCESS->value => 'oklch(72.3% 0.219 149.579)', // green-500
            ThemeVariable::SUCCESS_FOREGROUND->value => 'oklch(52.7% 0.154 150.069)', // green-700
            ThemeVariable::INFO->value => 'oklch(62.3% 0.214 259.815)', // blue-500
            ThemeVariable::INFO_FOREGROUND->value => 'oklch(48.8% 0.243 264.376)', // blue-700
            ThemeVariable::WARNING->value => 'oklch(76.9% 0.188 70.08)', // amber-500
            ThemeVariable::WARNING_FOREGROUND->value => 'oklch(55.5% 0.163 48.998)', // amber-700
            ThemeVariable::DANGER->value => 'oklch(63.7% 0.237 25.331)', // red-500
            ThemeVariable::DANGER_FOREGROUND->value => 'oklch(50.5% 0.213 27.518)', // red-700

            ThemeVariable::RADIUS->value => '0.5rem',
            ThemeVariable::RADIUS_INNER->value => '0.375rem',
        ];
    }

    private static function darkColors(): array
    {
        return [
            ThemeVariable::BACKGROUND->value => 'oklch(0 0 0)', // black
            ThemeVariable::FOREGROUND->value => 'oklch(97% 0 0)', // neutral-100

            ThemeVariable::PRIMARY->value => 'oklch(1 0 0)', // white
            ThemeVariable::PRIMARY_FOREGROUND->value => 'oklch(0 0 0)', // black

            ThemeVariable::SECONDARY->value => 'oklch(20.5% 0 0)', // neutral-900

            ThemeVariable::MUTED_FOREGROUND->value => 'oklch(70.8% 0 0)', // neutral-400

            ThemeVariable::CARD->value => 'oklch(14.5% 0 0)', // neutral-950

            ThemeVariable::BORDER->value => 'color-mix(in oklab, oklch(1 0 0) 10%, transparent)', // white/10

            ThemeVariable::SUCCESS_FOREGROUND->value => 'oklch(87.1% 0.15 154.449)', // green-300
            ThemeVariable::INFO_FOREGROUND->value => 'oklch(80.9% 0.105 251.813)', // blue-300
            ThemeVariable::WARNING_FOREGROUND->value => 'oklch(87.9% 0.169 91.605)', // amber-300
            ThemeVariable::DANGER_FOREGROUND->value => 'oklch(80.8% 0.114 19.571)', // red-300
        ];
    }
}
