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

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', ['as'=>'contact.store','uses'=>'ContactController@contact']);

Route::post('/contactMe', ['uses'=>'ContactController@ajax_contactMe'])->name('contactMe');

Route::get('/mentions-legales', function () {
    return view('mentions_legales');
})->name('mentions_legales');
