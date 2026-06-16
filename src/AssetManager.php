<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents;

use Illuminate\Support\Facades\Blade;

class AssetManager
{
    public static function boot()
    {
        $instance = new static();

        $instance->registerDirectives();
    }

    public function registerDirectives(): void
    {
        Blade::directive('ddfsnAppearance', function (): string {
            return "<?php echo \DistortedFusion\BladeComponents\BladeComponents::ddfsnAppearance() ?>";
        });
    }

    public static function ddfsnAppearance(array $options = []): string
    {
        $nonce = isset($options['nonce']) ? ' nonce="'.$options['nonce'].'"' : '';

        return <<<HTML
<script$nonce>
    window.DDFSN = {
        applyAppearance (appearance) {
            let applyClass = (class) => document.documentElement.classList.add(class)
            let removeClass = (class) => document.documentElement.classList.remove(class)

            if (appearance === 'system') {
                let media = window.matchMedia('(prefers-color-scheme: dark)')

                window.localStorage.removeItem('ddfsn.appearance')

                media.matches ? applyClass('dark') : removeClass('dark')
            } else if (appearance === 'dark') {
                window.localStorage.setItem('ddfsn.appearance', 'dark')

                applyClass('dark')
            } else if (appearance === 'light') {
                window.localStorage.setItem('ddfsn.appearance', 'light')

                removeClass('dark')
            }
        }
    }

    window.DDFSN.applyAppearance(window.localStorage.getItem('ddfsn.appearance') || 'system')
</script$>
HTML;
    }
}
