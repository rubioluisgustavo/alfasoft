<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Components\Forms\Input;
use App\View\Components\Forms\Button;
use Illuminate\Support\Facades\Blade;

class ViewServiceProvider extends ServiceProvider
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
        Blade::component('input', Input::class);
        Blade::component('button', Button::class);
    }
}