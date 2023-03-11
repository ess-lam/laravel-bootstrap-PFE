<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

Route::get(
    '/', 
    [StaticController::class, 'index']
);

Route::get(
    '/home',
    [StaticController::class, 'home']
    )->name('home');

Route::get(
    '/about',
    [StaticController::class, 'about']
    )->name('about');



Route::resource('projets',PfeController::class); 



Route::get('/first/{category}/{item?}', function ($category=null,$item=null) {
    return "<h1>{$category}</h1><br><h2>{$item}</h2>";
});

