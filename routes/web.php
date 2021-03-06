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
//     return view('welcome');
// });

Route::get('/','FrontController@index')->name('front.index');
Route::get('/contacto','FrontController@contacto')->name('front.contacto');
Route::get('/producto','FrontController@producto')->name('front.producto');
Route::get('/carrito','FrontController@carrito')->name('front.carrito');
Route::get('/checkout','FrontController@checkout')->name('front.checkout');
Route::get('/catalogo','FrontController@catalogo')->name('front.catalogo');
