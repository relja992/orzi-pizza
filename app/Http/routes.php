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

Route::get('/', 'Kontroler@index');
Route::get('/menu', 'Kontroler@menu');
Route::get('/contact', 'Kontroler@contact');
Route::get('/gallery', 'Kontroler@gallery');
Route::get('/narucite_online', 'Kontroler@online');
