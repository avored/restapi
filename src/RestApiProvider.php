<?php
namespace AvoRed\RestApi;

use Illuminate\Support\ServiceProvider;

class GraphqlProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     * @return void
     */
    public function boot()
    {
        // dd(config('grahpql'));
    }
}
