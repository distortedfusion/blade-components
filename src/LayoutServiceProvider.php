<?php

namespace DistortedFusion\Tailwind;

use DistortedFusion\Tailwind\Console\PublishCommand;
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
        if (! defined('DF_LTL_PATH')) {
            define('DF_LTL_PATH', realpath(__DIR__.'/../'));
        }

        $this->mergeConfigFrom(DF_LTL_PATH.'/config/tailwind-layout.php', 'tailwind-layout');
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerResources();
        $this->defineAssetPublishing();
        $this->offerPublishing();

        $this->configureBladeComponents();
        $this->configureFormComponentsOverload();
        $this->configureCommands();
    }

    private function registerResources(): void
    {
        $this->loadViewsFrom(DF_LTL_PATH.'/resources/views', 'tailwind-layout');
    }

    private function defineAssetPublishing(): void
    {
        $this->publishes([
            DF_LTL_PATH.'/public' => public_path('/vendor/distortedfusion/laravel-tailwind-layout'),
            DF_LTL_PATH.'/resources/css' => $this->app->resourcePath('/css/vendor/distortedfusion/laravel-tailwind-layout'),
            DF_LTL_PATH.'/resources/js' => $this->app->resourcePath('/js/vendor/distortedfusion/laravel-tailwind-layout'),
        ], 'df-assets');

        $this->publishes([
            DF_LTL_PATH.'/resources/views/errors' => $this->app->resourcePath('views/errors/'),
        ], ['df-errors', 'df-assets']);
    }

    private function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                DF_LTL_PATH.'/config/tailwind-layout.php' => config_path('tailwind-layout.php'),
            ], 'tailwind-layout-config');

            $this->publishes([
                DF_LTL_PATH.'/resources/views' => resource_path('views/vendor/tailwind-layout'),
            ], 'tailwind-layout-views');
        }
    }

    private function configureBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            foreach (config('tailwind-layout.components', []) as $alias => $component) {
                $blade->component($component, $alias);
            }
        });
    }

    private function configureFormComponentsOverload(): void
    {
        $this->callAfterResolving(FormComponent::class, function () {
            foreach (config('tailwind-layout.form-components', []) as $alias => $config) {
                $defaultConfig = config('form-components.components.'.$alias);

                Config::set('form-components.components.'.$alias, array_merge($defaultConfig, $config));
            }
        });
    }

    private function configureCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }
}
