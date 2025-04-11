<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;

Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::get('/', [PageController::class, 'index']);
Route::get('/post', [PageController::class, 'post']);
Route::get('/post-detail&{id}', [PageController::class, 'postDetail']);
Route::get('/page-detail&{id}', [PageController::class, 'pageDetail']);
Route::get('/contactUs', [PageController::class, 'contactUs']);
