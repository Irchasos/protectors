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

Route::get('/home', [App\Http\Controllers\MainPageController::class, 'index'])->name('home');
Route::get('/version', [App\Http\Controllers\MainPageController::class, 'version'])->name('version');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
