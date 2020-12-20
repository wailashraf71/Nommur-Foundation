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

Route::prefix('admin')->as('admin.')->group(function () {
    Route::group(['middleware' => ['auth:web']], function () {
        Route::get('/', 'DashboardController@index')->name('admin');
        Route::resource('donation', 'DonationController');
        Route::get('donation-data', 'DonationController@data')->name('donation.data');
    });
});

Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('/donate', 'Web\HomeController@donate')->name('donate');
Route::get('/about', 'Web\HomeController@about')->name('about');
Route::get('/contact', 'Web\HomeController@contact')->name('contact');
Route::get('/our-cases', 'Web\HomeController@ourCases')->name('our-cases');

Route::post('/donate', 'Web\HomeController@donatePost')->name('donate-post');

Route::fallback(function () {
    return view('admin.404');
});
