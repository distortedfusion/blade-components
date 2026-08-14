<?php

declare(strict_types=1);

namespace DistortedFusion\BladeComponents;

use Illuminate\Contracts\Routing\Registrar as RegistrarContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\Compilers\BladeCompiler;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
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

        $blade->directive('ddfsnScripts', function ($expression) {
            return "<?php echo \DistortedFusion\BladeComponents\BladeComponents::ddfsnScripts() ?>";
        });
    }

    public function registerRoutes(RegistrarContract $router)
    {
        $router->get('/ddfsn/blade-components.js', [static::class, 'bladeComponentsJs']);
        $router->get('/ddfsn/blade-components.min.js', [static::class, 'bladeComponentsMinJs']);
    }

    public function bladeComponentsJs(Request $request)
    {
        return $this->fileResponse(
            request: $request,
            path: __DIR__.'/../dist/blade-components.js',
            contentType: 'text/javascript'
        );
    }

    public function bladeComponentsMinJs(Request $request)
    {
        return $this->fileResponse(
            request: $request,
            path: __DIR__.'/../dist/blade-components.min.js',
            contentType: 'text/javascript'
        );
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

        $response->isNotModified($request);

        return $response;
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

    public static function ddfsnScripts(array $options = []): ?string
    {
        $manifestPath = __DIR__.'/../dist/manifest.json';

        if (! file_exists($manifestPath)) {
            return null;
        }

        $nonce = isset($options['nonce']) ? ' nonce="'.$options['nonce'].'"' : '';

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (! App::isProduction()) {
            $versionHash = $manifest['/blade-components.js'];

            return '<script src="'.url('/ddfsn/blade-components.js?id='.$versionHash).'" data-navigate-once'.$nonce.'></script>';
        }

        $versionHash = $manifest['/blade-components.min.js'];

        return '<script src="'.url('/ddfsn/blade-components.min.js?id='.$versionHash).'" data-navigate-once'.$nonce.'></script>';
    }
}
