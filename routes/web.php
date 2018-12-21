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

Route::get('/projet/wifi', function () {
    return view('default.wifi');
})->name('wifi_project');
Route::get('/projet/flux_rss', function () {
    return view('default.rss');
})->name('rss_project');
Route::get('/projet/parking', function () {
    return view('default.parking');
})->name('parking_project');

Route::get('/', 'DefaultController@home')->name('home');

Route::resource('projects', 'ProjectController');
