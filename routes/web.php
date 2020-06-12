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
Route::get('/home', 'HomeController@index');
Route::resource('UsePRofil', 'UseAdminController');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('test', 'test@index');

/*
|--------------------------------------------------------------------------
| Start restaurant routes
*/
Route::group([
    'prefix' => '/manage',
    'as' => 'manage::'
],
    function () {
        Route::get('/view', 'restaurantController@mView')
            ->name('view');
        Route::match(['get', 'post','update'], '/add', 'restaurantController@add')
            ->name('add');
        Route::post('/delete/{id}', 'restaurantController@delete')
            ->name('delete');
    }
);
/*
| Start restaurant routes
|--------------------------------------------------------------------------
*/


Route::view('/{path?}', 'welcome')
    ->where('path', '.*')
    ->name('home');


