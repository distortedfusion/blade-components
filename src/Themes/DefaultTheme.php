<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents\Themes;

use DistortedFusion\BladeComponents\Contracts\ThemeContract;
use DistortedFusion\BladeComponents\Enums\ThemeVariable;
use DistortedFusion\BladeComponents\Enums\ThemeVariant;

/**
 * TailwindCSS - Lookup table.
 *
 * --color-green-300: oklch(87.1% 0.15 154.449);
 * --color-green-500: oklch(72.3% 0.219 149.579);
 * --color-green-700: oklch(52.7% 0.154 150.069);.
 *
 * --color-blue-300: oklch(80.9% 0.105 251.813);
 * --color-blue-500: oklch(62.3% 0.214 259.815);
 * --color-blue-700: oklch(48.8% 0.243 264.376);
 *
 * --color-amber-300: oklch(87.9% 0.169 91.605);
 * --color-amber-500: oklch(76.9% 0.188 70.08);
 * --color-amber-700: oklch(55.5% 0.163 48.998);
 *
 * --color-red-300: oklch(80.8% 0.114 19.571);
 * --color-red-500: oklch(63.7% 0.237 25.331);
 * --color-red-700: oklch(50.5% 0.213 27.518);
 *
 * --color-neutral-100: oklch(97% 0 0);
 * --color-neutral-400: oklch(70.8% 0 0);
 * --color-neutral-600: oklch(43.9% 0 0);
 * --color-neutral-800: oklch(26.9% 0 0);
 * --color-neutral-900: oklch(20.5% 0 0);
 * --color-neutral-950: oklch(14.5% 0 0);
 */
class DefaultTheme implements ThemeContract
{
    /**
     * {@inheritDoc}
     */
    public static function definitions(ThemeVariant $variant): array
    {
        return match ($variant) {
            ThemeVariant::DARK => static::darkColors(),
            ThemeVariant::LIGHT => static::lightColors(),
            default => [],
        };
    }

    private static function lightColors(): array
    {
        return [
            ThemeVariable::BACKGROUND->value => '#fff',
            ThemeVariable::FOREGROUND->value => 'oklch(20.5% 0 0)', // neutral-900

            ThemeVariable::BACKDROP->value => 'color-mix(in oklab,var(--background) 60%,transparent)',

            ThemeVariable::PRIMARY->value => '#000',
            ThemeVariable::PRIMARY_FOREGROUND->value => '#fff',

            ThemeVariable::SECONDARY->value => 'oklch(97% 0 0)', // neutral-100
            ThemeVariable::SECONDARY_FOREGROUND->value => 'var(--foreground)',

            ThemeVariable::ACCENT->value => 'var(--secondary)',
            ThemeVariable::ACCENT_FOREGROUND->value => 'var(--secondary-foreground)',

            ThemeVariable::MUTED->value => 'var(--secondary)',
            ThemeVariable::MUTED_FOREGROUND->value => 'oklch(43.9% 0 0)', // neutral-600

            ThemeVariable::CARD->value => 'var(--background)',
            ThemeVariable::CARD_FOREGROUND->value => 'var(--foreground)',

            ThemeVariable::BORDER->value => 'oklch(92.2% 0 0)', // neutral-200
            ThemeVariable::INPUT->value => '#fff',
            ThemeVariable::RING->value => 'var(--primary)',

            ThemeVariable::SUCCESS->value => 'oklch(72.3% 0.219 149.579)',            // green-500
            ThemeVariable::SUCCESS_FOREGROUND->value => 'oklch(52.7% 0.154 150.069)', // green-700
            ThemeVariable::INFO->value => 'oklch(62.3% 0.214 259.815)',               // blue-500
            ThemeVariable::INFO_FOREGROUND->value => 'oklch(48.8% 0.243 264.376)',    // blue-700
            ThemeVariable::WARNING->value => 'oklch(76.9% 0.188 70.08)',              // amber-500
            ThemeVariable::WARNING_FOREGROUND->value => 'oklch(55.5% 0.163 48.998)',  // amber-700
            ThemeVariable::DANGER->value => 'oklch(63.7% 0.237 25.331)',              // red-500
            ThemeVariable::DANGER_FOREGROUND->value => 'oklch(50.5% 0.213 27.518)',   // red-700

            ThemeVariable::RADIUS->value => '0.5rem',
            ThemeVariable::RADIUS_INNER->value => '0.375rem',
        ];
    }

    private static function darkColors(): array
    {
        return [
            ThemeVariable::BACKGROUND->value => '#000',
            ThemeVariable::FOREGROUND->value => 'oklch(97% 0 0)', // neutral-100

            ThemeVariable::PRIMARY->value => '#fff',
            ThemeVariable::PRIMARY_FOREGROUND->value => '#000',

            ThemeVariable::SECONDARY->value => 'oklch(20.5% 0 0)', // neutral-900

            ThemeVariable::MUTED_FOREGROUND->value => 'oklch(70.8% 0 0)', // neutral-400

            ThemeVariable::CARD->value => 'oklch(14.5% 0 0)', // neutral-950

            ThemeVariable::BORDER->value => 'oklch(26.9% 0 0)', // neutral-800
            ThemeVariable::INPUT->value => 'var(--accent)',

            ThemeVariable::SUCCESS_FOREGROUND->value => 'oklch(87.1% 0.15 154.449)', // green-300
            ThemeVariable::INFO_FOREGROUND->value => 'oklch(80.9% 0.105 251.813)',   // blue-300
            ThemeVariable::WARNING_FOREGROUND->value => 'oklch(87.9% 0.169 91.605)', // amber-300
            ThemeVariable::DANGER_FOREGROUND->value => 'oklch(80.8% 0.114 19.571)',  // red-300
        ];
    }
}
