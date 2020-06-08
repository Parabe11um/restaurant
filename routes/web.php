<?php

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
Route::view('/login', 'auth\login');
Route::view('/register', 'auth\login');

Auth::routes();
Route::get('/test', 'test@index');
Route::get('/home', 'HomeController@index');
Route::resource('UsePRofil', 'UseAdminController');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::view('/{path?}', 'welcome')
//    ->where('path', '.*')
//    ->name('welcome');

Route::group([
    'prefix' => '/rest',
    'as' => 'rest::',
],
    function () {
        Route::match(['get', 'post'], '/edit', 'restaurantController@edit')
            ->name('edit');
    }
);
