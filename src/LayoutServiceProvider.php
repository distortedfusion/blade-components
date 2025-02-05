<?php

namespace DistortedFusion\BladeComponents;

use DistortedFusion\BladeComponents\Console\PublishCommand;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        if (! defined('DF_BC_PATH')) {
            define('DF_BC_PATH', realpath(__DIR__.'/../'));
        }

        $this->mergeConfigFrom(DF_BC_PATH.'/config/blade-components.php', 'blade-components');
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
        $this->configureCommands();
    }

    private function registerResources(): void
    {
        $this->loadViewsFrom(DF_BC_PATH.'/resources/views', 'blade-components');
    }

    private function defineAssetPublishing(): void
    {
        $this->publishes([
            DF_BC_PATH.'/resources/css' => $this->app->resourcePath('/css/vendor/ddfsn/blade-components'),
            DF_BC_PATH.'/resources/js' => $this->app->resourcePath('/js/vendor/ddfsn/blade-components'),
        ], 'df-assets');
    }

    private function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                DF_BC_PATH.'/config/blade-components.php' => config_path('blade-components.php'),
            ], 'blade-components-config');

            $this->publishes([
                DF_BC_PATH.'/resources/views' => resource_path('views/vendor/blade-components'),
            ], 'blade-components-views');
        }
    }

    private function configureBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            foreach (config('blade-components.components', []) as $alias => $component) {
                $blade->component($component, $alias);
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
