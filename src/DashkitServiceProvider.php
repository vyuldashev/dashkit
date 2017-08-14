<?php

declare(strict_types=1);

namespace Dashkit;

use Illuminate\Support\ServiceProvider;

class DashkitServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/dashkit.php');

        $this->publishes([
            __DIR__.'/../config/dashkit.php' => config_path('dashkit.php'),
        ]);
    }

    public function register(): void
    {
        $this->app->bind(Manager::class, function () {
            return new Manager(
                config('dashkit.kits', [])
            );
        });
    }
}
