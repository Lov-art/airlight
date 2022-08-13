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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/create', function () {
    return view('create-news');
});

Route::prefix('news')-> group(function(){
    Route::get('/',[\App\Http\Controllers\NewsController::class,'index']);
    Route::get('get',[\App\Http\Controllers\NewsController::class,'get']);
    Route::post('put',[\App\Http\Controllers\NewsController::class,'put']);
});
