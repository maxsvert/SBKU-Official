<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
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
Route::get('lang/{locale}', [LanguageController::class,'swap']);
Route::get('/', [PageController::class, 'index']);
Route::get('/post', [PageController::class, 'post']);
Route::get('/post-detail&{id}', [PageController::class, 'postDetail']);
Route::get('/page&{id}', [PageController::class, 'page']);
Route::get('/page-detail&{id}', [PageController::class, 'pageDetail']);
// Route::get('/', function () {
//     return view('welcome');
// });
