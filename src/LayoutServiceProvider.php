<?php

namespace DistortedFusion\Tailwind;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use ProtoneMedia\LaravelFormComponents\Components\Component as FormComponent;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        if (! defined('TL_PATH')) {
            define('TL_PATH', realpath(__DIR__.'/../'));
        }

        $this->mergeConfigFrom(__DIR__.'/../config/tailwind-layout.php', 'tailwind-layout');
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootResources();
        $this->bootBladeComponents();
        $this->bootPublishing();
        $this->bootFormComponentsOverload();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(TL_PATH.'/resources/views', 'tailwind-layout');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            foreach (config('tailwind-layout.components', []) as $alias => $component) {
                $blade->component($component, $alias);
            }
        });
    }

    private function bootPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                TL_PATH.'/config/tailwind-layout.php' => config_path('tailwind-layout.php'),
            ], 'tailwind-layout-config');

            $this->publishes([
                TL_PATH.'/resources/views' => resource_path('views/vendor/tailwind-layout'),
            ], 'tailwind-layout-views');
        }
    }

    private function bootFormComponentsOverload(): void
    {
        $this->callAfterResolving(FormComponent::class, function () {
            foreach (config('tailwind-layout.form-components', []) as $alias => $config) {
                $defaultConfig = config('form-components.components.'.$alias);

                Config::set('form-components.components.'.$alias, array_merge($defaultConfig, $config));
            }
        });
    }
}
