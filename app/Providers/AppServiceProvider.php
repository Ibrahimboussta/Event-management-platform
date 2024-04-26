<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        //
            $events = Event::all();
            $users = Auth()->user();
            $user = User::all();
            view()->share(['events' => $events]);
            view()->share(['users' => $users]);
            view()->share(['user' => $user]);
    }
}
