<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/comic/create', [ComicController::class, 'create'])->name('comic.create');