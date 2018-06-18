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

Route::get('/', function () {
    return view('welcome');
});

// Route for stripe.
Route::resource('stripe','StripeController');

// Route for stripe payment form.
Route::get('stripe', 'StripeController@payWithStripe')->name('stripform');

// Route for stripe post request.
Route::post('stripe', 'StripeController@postPaymentWithStripe')->name('paywithstripe');