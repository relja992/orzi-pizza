<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['as' => 'home', 'uses' => 'Kontroler@index']);
Route::get('/menu', ['as' => 'menu', 'uses' => 'Kontroler@menu']);
Route::get('/menu2', ['as' => 'menu2', 'uses' => 'Kontroler@menu2']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'Kontroler@contact']);
Route::get('/gallery', ['as' => 'gallery', 'uses' => 'Kontroler@gallery']);
//Route::get('/narucite_online', ['as' => 'narucite_online', 'uses' => 'Kontroler@online']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');

	Route::resource('category','CategoriesController');
});

Route::auth();

Route::get('/home', 'HomeController@index');


/*Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

});
Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');*/


