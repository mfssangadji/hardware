<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $kategori = \App\Kategori::all();
        foreach($kategori as $val){
            $menu[$val->id] = $val->nama_kategori;
        }

        View::share('menu', $menu);
        Schema::defaultStringLength(191);
    }
}
