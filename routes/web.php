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

Route::get('/', [
    'uses' => 'CelebController@index',
    'as'   => 'celeb'
]);

Route::get('/join', [
    'uses' => 'CelebController@reg',
    'as'   => 'join'
]);

Route::post('/join/success', [
    'uses' => 'CelebController@jn',
    'as'   => 'join.sucs'
]);

Route::get('/gallery', [
    'uses' => 'CelebController@gl',
    'as'   => 'gallery'
]);

Route::get('/contact', [
    'uses' => 'CelebController@cont',
    'as'   => 'contact'
]);
Route::post('/contact/success', [
    'uses' => 'CelebController@cs',
    'as'   => 'contact.sucs'
]);
Auth::routes();



Route::group(['middleware' => 'auth'], function() {
// lots of routes that require auth middleware
    Route::get('/admin', 'HomeController@index')->name('admin');
    Route::resource('admin/service','BackendController');
    Route::resource('admin/event','EveController');
    Route::resource('admin/gallery','GalleryController');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');