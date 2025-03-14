<?php

namespace App\Providers;

use App\Policies\ArticlePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Mendaftarkan policy untuk model Article
        Gate::define('create', [ArticlePolicy::class, 'create']);
    }
}
