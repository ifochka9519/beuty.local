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

Route::get('/', 'ItemController@index')->name('index');


Route::get('/about', 'ArticleController@index')->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/mail', 'MailController@send')->name('send');

Route::get('/necklace', 'ItemController@necklace')->name('necklace');
Route::get('/earrings', 'ItemController@earrings')->name('earrings');
Route::get('/bracelets', 'ItemController@bracelets')->name('bracelets');
Route::get('/pricing', 'ItemController@mix')->name('pricing');
Route::post('/gallery', 'PhotoController@gallery')->name('gallery');

Route::get('/item', 'ItemController@item')->name('item');