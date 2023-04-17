<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PfeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::view(
    '/',
    'home'
    )->name('home1');

Route::get(
    '/search',
    [SearchController::class, 'search']
    )->name('search');

Route::resource('projets',PfeController::class); 

Route::controller(FileController::class)->group(function () {
    //Route::post('/upload', 'uploadFile')->name('file.upload');
    Route::get('/download/{id}', 'downloadFile')->name('file.download');
});

Auth::routes(['register'=> false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view(
    '/page',
    'HomePage'
    )->name('home2');