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
Route::get('/', [HomepageController::class, 'index'])->name('homepage');


Route::name('admin.')->prefix('admin')->group( function(){

    Route::resource('/comics', AdminComicController::class);

});

Route::get('admin/comics/{id}/edit', [AdminComicController::class, 'edit'])->name('admin.comics.edit');

