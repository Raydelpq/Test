<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\User\Services\UserService;
use App\Domain\User\Contracts\UserServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(UserServiceInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
