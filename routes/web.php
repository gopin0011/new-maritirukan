<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
})->name('home');

Route::get('/howto', function () {
    return view('howto');
})->name('howto');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/download', function () {
    return view('download');
})->name('download');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('APIkey');
Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
