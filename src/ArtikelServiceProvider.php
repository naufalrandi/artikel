<?php

namespace Bageur\Artikel;

use Illuminate\Support\ServiceProvider;

class ArtikelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // include __DIR__.'/routes/web.php';
        $this->app->make('Bageur\Artikel\ArtikelController');
        $this->app->make('Bageur\Artikel\AuthorController');
        $this->app->make('Bageur\Artikel\KategoriController');
        $this->app->make('Bageur\Artikel\KomenController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migration');
    }
}
