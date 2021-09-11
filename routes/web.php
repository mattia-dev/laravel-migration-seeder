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

Route::get('/', 'HomeController@index');

Route::get('discounted', 'DiscountedController@index');

Route::get('low-price', 'LowPriceController@index');

Route::get('trip/{id}', 'TripController@index');

Route::get('trip/{id}/book', 'TripBookingController@index');