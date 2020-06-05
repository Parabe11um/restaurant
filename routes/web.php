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


//нужко оставить так, чтоб работвл нормвльно реакт роутинг
Route::view('/{path?}', 'welcome');


/*
|--------------------------------------------------------------------------
| Start restaurant routes
*/
Route::group([
    'prefix' => '/rest',
    'as' => 'rest::'
],
    function () {
        Route::get('/list', 'restaurantController@search')
            ->name('list');
        Route::get('/view', 'restaurantController@view')
            ->name('view');
        Route::post('/add', 'restaurantController@add')
            ->name('add');
        Route::post('/delete/{id}', 'restaurantController@delete')
            ->name('delete');
    }
);
/*
| Start restaurant routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin',function(){
    return view('admin');
})->name('admin.post')->middleware('can:edit-posts');

Route::resource('UseRofil', 'UseAdminController');
