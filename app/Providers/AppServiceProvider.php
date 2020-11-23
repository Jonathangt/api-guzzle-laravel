<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //recibe un string (cualquiera)
        //2do parametro funcion anonima
        //cada ves que se inyecte la clase GuzzleHttp\Client, nos devolvera una nueva
        // instancia de la clase client
        $this->app->singleton('GuzzleHttp\Client', function(){
            return new Client ([
                'base_uri' => 'https://jsonplaceholder.typicode.com',
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
