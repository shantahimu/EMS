<?php

namespace App\Providers;
use App\Models\Event;

use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
USE Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        if(Schema::hasTable('events')){
            $events = Event::all();
            View::share('events',$events);
        }
        if(Schema::hasTable('services')){
            $services = Service::all();
            View::share('services',$services);
        }
    }
}
