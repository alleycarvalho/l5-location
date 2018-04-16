<?php

namespace AlleyCarvalho\Location\Providers;

use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Loading routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}
