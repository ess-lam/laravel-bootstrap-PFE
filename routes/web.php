<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PfeController;

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
    )->name('home');

Route::get(
    '/search',
    [SearchController::class, 'search']
    )->name('search');



Route::resource('projets',PfeController::class); 



Route::get('/first/{category}/{item?}', function ($category=null,$item=null) {
    return "<h1>{$category}</h1><br><h2>{$item}</h2>";
});

