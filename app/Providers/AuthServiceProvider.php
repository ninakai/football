<?php

namespace App\Providers;

use App\Models\Game;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;


class AuthServiceProvider extends ServiceProvider
{

    public function register():void
    {
        //
    }

    public function boot():void
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
    }
}
