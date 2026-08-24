<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents;

use Illuminate\Contracts\Routing\Registrar as RegistrarContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\Compilers\BladeCompiler;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AssetManager
{
    public static function boot(
        BladeCompiler $blade,
        RegistrarContract $router,
    ): void {
        $manager = new static();

        $manager->registerDirectives($blade);
        $manager->registerRoutes($router);
    }

    public function registerDirectives(BladeCompiler $blade): void
    {
        $blade->directive('ddfsnAppearance', function (): string {
            return "<?php echo \DistortedFusion\BladeComponents\BladeComponents::ddfsnAppearance() ?>";
        });

        $blade->directive('ddfsnStyles', function (): string {
            return "<?php echo \DistortedFusion\BladeComponents\BladeComponents::ddfsnStyles() ?>";
        });

        $blade->directive('ddfsnScripts', function (): string {
            return "<?php echo \DistortedFusion\BladeComponents\BladeComponents::ddfsnScripts() ?>";
        });
    }

    public function registerRoutes(RegistrarContract $router)
    {
        $router->get('/ddfsn/blade-components.css', [static::class, 'bladeComponentsCss']);
        $router->get('/ddfsn/blade-components.min.css', [static::class, 'bladeComponentsMinCss']);
        $router->get('/ddfsn/blade-components.js', [static::class, 'bladeComponentsJs']);
        $router->get('/ddfsn/blade-components.min.js', [static::class, 'bladeComponentsMinJs']);
    }

    public function bladeComponentsCss(Request $request): Response
    {
        return $this->textResponse(
            request: $request,
            content: ThemeManager::renderStyles(),
            hash: ThemeManager::hashStyles(),
            contentType: 'text/css'
        );
    }

    public function bladeComponentsMinCss(Request $request): Response
    {
        return $this->textResponse(
            request: $request,
            content: $this->minifyCss(ThemeManager::renderStyles()),
            hash: ThemeManager::hashStyles(),
            contentType: 'text/css'
        );
    }

    public function bladeComponentsJs(Request $request): BinaryFileResponse
    {
        return $this->fileResponse(
            request: $request,
            path: __DIR__.'/../dist/blade-components.js',
            contentType: 'text/javascript'
        );
    }

    public function bladeComponentsMinJs(Request $request): BinaryFileResponse
    {
        return $this->fileResponse(
            request: $request,
            path: __DIR__.'/../dist/blade-components.min.js',
            contentType: 'text/javascript'
        );
    }

    public static function ddfsnAppearance(array $options = []): string
    {
        $nonce = isset($options['nonce']) ? ' nonce="'.$options['nonce'].'"' : '';

        return <<<HTML
<script$nonce>
    window.DDFSN = {
        applyAppearance (appearance) {
            let applyClass = (className) => document.documentElement.classList.add(className);
            let removeClass = (className) => document.documentElement.classList.remove(className);

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
</script>
HTML;
    }

    public static function ddfsnStyles(array $options = []): ?string
    {
        $versionHash = ThemeManager::hashStyles();

        if (! App::isProduction()) {
            return '<link href="'.url('/ddfsn/blade-components.css?id='.$versionHash).'" rel="stylesheet" />';
        }

        return '<link href="'.url('/ddfsn/blade-components.min.css?id='.$versionHash).'" rel="stylesheet" />';
    }

    public static function ddfsnScripts(array $options = []): ?string
    {
        $manifestPath = __DIR__.'/../dist/manifest.json';

        if (! file_exists($manifestPath)) {
            return null;
        }

        $dataAttributes = class_exists(\Livewire\Livewire::class) ? ' data-navigate-once' : '';
        $nonce = isset($options['nonce']) ? ' nonce="'.$options['nonce'].'"' : '';

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (! App::isProduction()) {
            $versionHash = $manifest['/blade-components.js'];

            return '<script src="'.url('/ddfsn/blade-components.js?id='.$versionHash).'"'.$dataAttributes.$nonce.'></script>';
        }

        $versionHash = $manifest['/blade-components.min.js'];

        return '<script src="'.url('/ddfsn/blade-components.min.js?id='.$versionHash).'"'.$dataAttributes.$nonce.'></script>';
    }

    public function textResponse(Request $request, string $content, string $hash, string $contentType): Response
    {
        $expires = strtotime('+1 year');

        $response = new Response($content, 200, [
            'Content-Type' => $contentType,
            'Expires' => gmdate('D, d M Y H:i:s', $expires).' GMT',
            'Etag' => $hash,
            'Cache-Control' => 'public, max-age=31536000',
        ]);

        $response->setEtag($hash);
        $response->isNotModified($request);

        return $response;
    }

    public function fileResponse(Request $request, string $path, string $contentType)
    {
        if (! file_exists($path)) {
            throw new NotFoundHttpException();
        }

        $lastModified = filemtime($path);
        $expires = strtotime('+1 year');

        $response = new BinaryFileResponse($path, 200, [
            'Content-Type' => $contentType,
            'Last-Modified' => gmdate('D, d M Y H:i:s', $lastModified).' GMT',
            'Expires' => gmdate('D, d M Y H:i:s', $expires).' GMT',
            'Cache-Control' => 'public, max-age=31536000',
        ]);

        $response->setEtag(hash_file('xxh128', $path));
        $response->isNotModified($request);

        return $response;
    }

    private function minifyCss(string $css): string
    {
        // Minify CSS:
        // - Collapse all whitespaces and newlines to single spaces.
        // - Remove spaces around structural characters.
        // - Remove the last semicolon before a closing brace.
        $css = preg_replace('/\s+/', ' ', $css);
        $css = preg_replace('/\s*([{}:;,])\s*/', '$1', $css);
        $css = str_replace(';}', '}', $css);

        return trim($css);
    }
}
