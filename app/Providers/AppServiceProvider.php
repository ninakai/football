<?php

namespace App\Providers;

use App\Models\Game;
use Illuminate\Auth\Access\Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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
        Paginator::defaultView('pagination::default');

        Gate::define('destroy-game', function ($user, Game $game) {
            return $user->name === 'admin';
        });

        Gate::define('edit-game', function ($user, Game $game) {
            return $user->name === 'admin';
        });

        Gate::define('create-game', function ($user) {
            return $user->name === 'admin';
        });

        View::share('user', Auth::user());
    }
}
