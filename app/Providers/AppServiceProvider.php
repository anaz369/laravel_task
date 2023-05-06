<?php

namespace App\Providers;
use App\Repository\studentRepository;
use App\Repository\studentRepositoryinterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(studentRepositoryinterface::class ,studentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
