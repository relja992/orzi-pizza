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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::post('/cart/addItem/{id}', ['as' => 'cart.addItem', 'uses' => 'CartController@addItem']);
Route::get('/checkout', 'CheckoutController@step1');
Route::get('/shipping', ['as' => 'shipping', 'uses' => 'CheckoutController@shipping']);
Route::post('/orderstore', ['as' => 'orderstore', 'uses' => 'CheckoutController@finishOrder']);
Route::get('/test', ['as' => 'address.store', 'uses' => 'CheckoutController@shipping']);

Route::get('/email/{id}', 'EmailController@posalji');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');

    Route::resource('category','CategoriesController');

    Route::get('orders/{id}/details/', ['as' => 'admin.orders.details', 'uses' => 'OrderController@orderDetails']);
    Route::get('orders/{id}/updatee/', ['as' => 'admin.orders.updatee', 'uses' => 'OrderController@updatee']);
    Route::resource('orders','OrderController');
});