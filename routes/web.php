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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/equipage', function () {
    return view('equipage');
})->name('equipage');

Route::get('/financement', function () {
    return view('financement');
})->name('financement');

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');

Route::get('/projet', function () {
    return view('projet');
})->name('projet');


Route::get('/news', 'NewsController@index')->name('news');

Route::get('/photos', 'PhotosController@index')->name('photos');
Route::get('/photos/{slug?}', 'PhotosController@photos')->name('photos.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', ['as'=>'contact.store','uses'=>'ContactController@contact']);

Route::post('/contactMe', ['uses'=>'ContactController@ajax_contactMe'])->name('contactMe');

Route::get('/mentions-legales', function () {
    return view('mentions_legales');
})->name('mentions_legales');


Route::get('/&admin-pannel', 'AdminController@index')->name('admin_dashboard');

Route::get('/&admin-pannel/news', 'NewsController@admin_index')->name('admin_news');
Route::get('/&admin-pannel/news/add', 'NewsController@add')->name('admin_add_news');
Route::post('/&admin-pannel/news/store', 'NewsController@store')->name('admin_store_news');

Route::get('/&admin-pannel/sponsors', 'SponsorsController@index')->name('admin_sponsors');
Route::get('/&admin-pannel/sponsors/add', 'SponsorsController@index')->name('admin_add_sponsor');

Route::get('/&admin-pannel/photos', 'PhotosController@adminIndex')->name('admin_photos');
Route::get('/&admin-pannel/photos/add', 'PhotosController@add')->name('admin_add_photos');
Route::get('/&admin-pannel/photos/addImages/{id}', 'PhotosController@addImages')->name('admin_add_images');
Route::post('/&admin-pannel/photos/storeAlbum', 'PhotosController@store')->name('admin_store_albums');
Route::post('/&admin-pannel/photos/storeImages', 'PhotosController@storeImages')->name('admin_store_images');
Route::delete('/&admin-pannel/photos/deleteAlbum/{id}', 'PhotosController@deleteAlbum')->name('admin_delete_album');
