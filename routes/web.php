<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;
use App\Models\Comic;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('comics.welcome');
});

Route::get('comics', [PageController::class, 'index'])->name('guest.comics.index');
Route::get('comics/{comic}', [PageController::class, 'show'])->name('guest.comics.show');

Route::resource('admin/comics', ComicController::class);
