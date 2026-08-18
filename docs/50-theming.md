---
title: Theming
description: Using CSS Variables and theme classes for styling.
links:
    ddfsn/blade-component-themes: https://github.com/distortedfusion/blade-component-themes
---

Blade Components uses CSS variables for styling. CSS variable definitions are defined in a theme class.

## Convention

Blade Components uses a simple `background` and `foreground` convention for colors. The `background` suffix is omitted when the variable is used for the background color of a component.

Using this convention for the `primary` color this would result in the following CSS variables:

```html
<style>
    :root {
        --primary: oklch(0 0 0);
        --primary-foreground: oklch(1 0 0);
    }
</style>

<div class="bg-[var(--primary)] text-[var(--primary-foreground)]">
    ...
</div>
```

## Available variables

All components use a fixed set of variables. These variables are defined in a PHP enum and together with the [theme class](#themes) processed during runtime.

```php
<?php

namespace DistortedFusion\BladeComponents\Enums;

enum ThemeVariable: string
{
    case BACKGROUND = 'background';
    case FOREGROUND = 'foreground';

    case PRIMARY = 'primary';
    case PRIMARY_FOREGROUND = 'primary-foreground';

    // ...
}
```

For a complete list refer to the [ThemeVariable.php](https://github.com/distortedfusion/blade-components/blob/master/src/Enums/ThemeVariable.php) enum.

## Themes

Themes are defined in [theme classes](https://github.com/distortedfusion/blade-components/tree/master/src/Contracts/ThemeContract.php), which contain a collection of CSS variables, most commonly, for 2 theme variants, light and dark.

Out of the box Blade Components loads the ["default theme"](https://github.com/distortedfusion/blade-components/blob/master/src/Themes/DefaultTheme.php) automatically. The default theme contains a variety of common CSS variable definitions used by Blade Components, including 2 theme variants, light and dark.

During runtime the theme variants will be rendered, by the `@ddfsnStyles` directive, within 2 generic CSS selectors `:root {}` and `.dark {}`.

```css
:root {
    --background: oklch(1 0 0);
    --foreground: oklch(0 0 0);
    ...
}
.dark {
    --background: oklch(0 0 0);
    --foreground: oklch(1 0 0);
    ...
}
```

### Custom theme

When creating a custom theme for Blade Components you're not required to define all possible CSS variables manually. Instead you can simply refer to the default theme and alter the variables you want customized.

```php
<?php

namespace App\Themes;

use DistortedFusion\BladeComponents\Contracts\ThemeContract;
use DistortedFusion\BladeComponents\Themes\DefaultTheme;
use DistortedFusion\BladeComponents\Enums\ThemeVariable;
use DistortedFusion\BladeComponents\Enums\ThemeVariant;

class CustomTheme implements ThemeContract
{
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
            ...DefaultTheme::definitions(ThemeVariant::LIGHT),

            ThemeVariable::BACKGROUND->value => 'oklch(1 0 0)', // white
            ThemeVariable::FOREGROUND->value => 'oklch(20.5% 0 0)', // neutral-900
        ];
    }

    private static function darkColors(): array
    {
        return [
            ...DefaultTheme::definitions(ThemeVariant::DARK),

            ThemeVariable::BACKGROUND->value => 'oklch(0 0 0)', // black
            ThemeVariable::FOREGROUND->value => 'oklch(97% 0 0)', // neutral-100
        ];
    }
}
```

### Setting the default theme

After creating your custom theme, or when using one of the provided [color variants](https://github.com/distortedfusion/blade-component-themes/tree/master/src), you need to register the default theme in your `AppServiceProvider` using the `BladeComponents::setDefaultTheme()` method.

```php
<?php

namespace App\Providers;

use App\Themes\CustomTheme;
use DistortedFusion\BladeComponents\BladeComponents;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            $this->callAfterResolving(BladeCompiler::class, function () {
                BladeComponents::setDefaultTheme(CustomTheme::class);
            });
        }
    }
}
```

### Adding a theme using a custom selector

If you're planning on supporting multiple themes at once, themes should be added using a custom selector. When using a custom selector all registered themes are available simultaneously and won't require a complete page reload when switching between themes.

> [!NOTE]
> Themes applied through custom selectors do not require to implement all available CSS variables and could be used to stack CSS variables across themes.

To register a theme using a custom selector you need to call the `BladeComponents::registerTheme()` method from your `AppServiceProvider`.

```php
<?php

namespace App\Providers;

use App\Themes\CustomTheme as CompanyTheme;
use DistortedFusion\BladeComponents\BladeComponents;
use DistortedFusion\BladeComponents\Enums\ThemeVariant;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            $this->callAfterResolving(BladeCompiler::class, function () {
                BladeComponents::registerTheme(
                    theme: CompanyTheme::class,
                    selectorResolver: function (string $theme, ThemeVariant $variant): string {
                        return match ($variant) {
                            ThemeVariant::DARK => '.dark .company-theme',
                            default => ':root .company-theme',
                        };
                    });
            });
        }
    }
}
```

Now you can add the `.company-theme` or both `.dark .company-theme` classes to your document's `<html>` element and your additional theme will be applied.
