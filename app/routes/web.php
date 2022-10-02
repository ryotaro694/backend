<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WordController;
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
    return redirect()->route('login');
});

Route::get('/home',  [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/words/create',  [WordController::class, 'create'])->name('word.create');
    Route::post('/words/create',  [WordController::class, 'store'])->name('word.store');
});
