<?php

namespace Mhaoxyz\Laravel\Model;

use Illuminate\Support\ServiceProvider;

class ModelCityServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../to/model' => app_path('Model'),
            __DIR__ . '/../to/migrations' => database_path('migrations'),
        ], 'mhaoxyz-model-city');
    }
}