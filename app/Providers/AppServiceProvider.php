<?php

namespace App\Providers;

use App\Jobs\ProcessLog;
use App\Services\Log\LogProcessor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bindMethod(
            [ProcessLog::class, 'handle'],
            function (ProcessLog $job, Application $app) {
                return $job->handle($app->make(LogProcessor::class));
            }
        );
    }
}
