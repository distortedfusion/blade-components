<?php

namespace DistortedFusion\Tailwind;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineResources();

        Blade::aliasComponent('tailwind-layout::container', 'container');
        Blade::aliasComponent('tailwind-layout::container-narrow', 'containerNarrow');

        Blade::component('alert', Components\Alert::class);

        Blade::component('table.cell', Components\Table\Cell::class);
        Blade::component('table.row-group', Components\Table\RowGroup::class);
        Blade::component('table.row', Components\Table\Row::class);
        Blade::component('table', Components\Table::class);

        Blade::component('field.title', Components\Field\Title::class);
    }

    /**
     * Define the resources for the package.
     *
     * @return void
     */
    protected function defineResources()
    {
        $this->loadViewsFrom(LAYOUT_INDEX_PATH.'/resources/views', 'tailwind-layout');

        if ($this->app->runningInConsole()) {
            $this->defineViewPublishing();
        }
    }

    /**
     * Define the view publishing configuration.
     *
     * @return void
     */
    public function defineViewPublishing()
    {
        $this->publishes([
            LAYOUT_INDEX_PATH.'/resources/views' => resource_path('views/vendor/tailwind-layout'),
        ], 'tailwind-layout-views');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('LAYOUT_INDEX_PATH')) {
            define('LAYOUT_INDEX_PATH', realpath(__DIR__.'/../'));
        }
    }
}
