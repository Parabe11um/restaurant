<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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
        Route::get('/list', 'restaurantController@search')
            ->name('list');
        Route::get('/view', 'restaurantController@view')
            ->name('view');
    }
);
/*
| Start restaurant routes
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Start restaurant routes
*/
Route::group([
    'prefix' => '/mail',
    'as' => 'mail::'
], function () {
    Route::post('/send-order', 'MailController@send_order')
        ->name('order');

    Route::post('/send-contact_us', 'MailController@send_ContactUs')
        ->name('ContactUs');
}
);


/*
| Start restaurant routes
|--------------------------------------------------------------------------
*/
