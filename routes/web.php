<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaakController;
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


// les1
Route::get('/test', [TaakController::class, 'index']);
Route::get('/taken/{opdracht}', [TaakController::class, 'show']);

// les2
Route::get('/post', [PostController::class, 'index']);  
Route::get('post/maken',[PostController::class,'maken']);
Route::post('post', [PostController::class,'opslaan']);
Route::get('post/{kijk}', [PostController::class,'zien']);
Route::post('post/{kijk}/comments', [CommentsController::class, 'opslaan']);