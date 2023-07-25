<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ComicController as AdminComicController;

use App\Http\Controllers\HomepageController as HomepageController;

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



Route::get('admin/comics', [AdminComicController::class, 'index'])->name('admin.comics.index');

Route::get('admin/comics/create', [AdminComicController::class, 'create'])->name('admin.comics.create');

Route::post('admin/comics', [AdminComicController::class, 'store'])->name('admin.comics.store');

Route::get('admin/comics/{id}', [AdminComicController::class, 'show'])->name('admin.comics.show');

Route::get('/', [HomepageController::class, 'index'])->name('homepage');