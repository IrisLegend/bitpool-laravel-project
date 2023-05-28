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

    // Route::get('/', function () {
    //     return view('dashboard');
    // });


    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return 'Application cache has been cleared';
    });
    


Route::get('/', 'App\Http\Controllers\FrontendController@dashboard');
Route::get('/quests/{id}', 'App\Http\Controllers\FrontendController@quests');
    
Route::get('/winner/{id}', 'App\Http\Controllers\FrontendController@winner');


Route::post('/login', 'App\Http\Controllers\FrontendController@login');
Route::post('/reg', 'App\Http\Controllers\FrontendController@register');
Route::get('/logout', 'App\Http\Controllers\FrontendController@logout');



// set route prefix

Route::get('/add-challenge', 'App\Http\Controllers\AdminController@add_challenge');
Route::post('/add-challenge', 'App\Http\Controllers\AdminController@add_challenge_store');

Route::get('/admin-challenges', 'App\Http\Controllers\AdminController@admin_challenge');

Route::get('/admin-bottom-banner', 'App\Http\Controllers\AdminController@admin_bottom_banner');
Route::post('/admin-bottom-banner', 'App\Http\Controllers\AdminController@admin_bottom_banner_post');