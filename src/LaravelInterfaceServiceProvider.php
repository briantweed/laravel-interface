<?php

namespace briantweed\LaravelViewFolder;

use Illuminate\Support\ServiceProvider;


class LaravelInterfaceServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->commands([
            Commands\LaravelInterfaceCommand::class
        ]);
    }


    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Commands/stubs' => resource_path('stubs'),
        ]);
    }


    public function provides()
    {
        return [
            Commands\LaravelInterfaceCommand::class
        ];
    }

}
