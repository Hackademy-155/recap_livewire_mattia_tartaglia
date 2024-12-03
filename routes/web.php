<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/comic/create', [ComicController::class, 'create'])->name('comic.create');
Route::get('/comic/index', [ComicController::class, 'index'])->name('comic.index');
Route::get('/recipe/show/{comic}', [ComicController::class, 'show'])->name('comic.show');