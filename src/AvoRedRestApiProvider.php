<?php
namespace AvoRed\RestApi;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AvoRedRestApiProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        $this->registerRoutePath();
    }

    /**
     * Bootstrap services.
     * @return void
     */
    public function boot()
    {
        // dd(config('grahpql'));
    }


    /**
     * Register Route Path.
     * @return void
     */
    public function registerRoutePath()
    {
        Route::prefix('api')
             ->middleware('api')
             ->group(__DIR__.'/../routes/api.php');
    }
}
