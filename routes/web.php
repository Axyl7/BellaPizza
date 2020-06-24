<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ApiController@loadingAction');
Route::get('/start', 'ApiController@indexAction');
Route::get('/work', 'ApiController@workAction');
Route::get('/map', 'ApiController@mapAction');
Route::get('/adminpanel', 'ApiController@adminpanelAction');
Route::get('/auth', 'AuthController@auth');
Route::middleware('auth')->group(function() {
    Route::get('/logout', 'AuthController@logout');
});
Route::get('/registration', 'AuthController@registration');
Route::get('/reg', 'ApiController@reg');
