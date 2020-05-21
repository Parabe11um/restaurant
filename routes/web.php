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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Start restaurant routes
*/

Route::group([
    'prefix' => '/rest',
    'as' => 'rest::'
],
    function () {
        Route::post('/add', 'restaurantController@add')
            ->name('add');
//        DANGER поменять роут на post
        Route::get('/delete/{id}', 'restaurantController@delete')
            ->name('delete');
        Route::get('/search/{words}', 'restaurantController@search')
            ->name('search');
    }
);

/*
| Start restaurant routes
|--------------------------------------------------------------------------
*/
