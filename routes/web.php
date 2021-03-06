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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function () {
    return view('services');
})->name("services");


Route::get('/programs', function () {
    return view('programs');
})->name("programs");

Route::get('/gallery', function () {
    return view('gallery');
})->name("gallery");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
