<?php

namespace Webkul\Task\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class TaskServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {}
}
