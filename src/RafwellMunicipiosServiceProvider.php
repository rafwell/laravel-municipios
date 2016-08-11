<?php

namespace Rafwell\Municipios;

use Illuminate\Support\ServiceProvider;

class RafwellMunicipiosServiceProvider extends ServiceProvider
{    
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/app' => app_path(),
        ]);

        $this->publishes([
            __DIR__.'/database' => database_path(),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Connection::class];
    }

}
