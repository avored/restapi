<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the AvoRedRestApiProvider within a group which
| contains the "api" middleware group. Now create something great!
|
*/
    
Route::get('/menu/{identifier}', [\AvoRed\RestApi\Cms\Controllers\MenuController::class, 'index']);
