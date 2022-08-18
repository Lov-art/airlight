<?php

use Illuminate\Contracts\Session\Session;
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

//Route::get('locale/{locale}', function ($locale) {
//    Session::put('locale', $locale);
//
//    return redirect()->back();
//})->name('locale');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/create', function () {
    return view('create-news');
});


Route::prefix('news')->name('news.')-> group(function(){
    Route::get('/',[\App\Http\Controllers\NewsController::class,'index']);
    Route::get('get',[\App\Http\Controllers\NewsController::class,'get'])->name('get');
    Route::post('put',[\App\Http\Controllers\NewsController::class,'put'])->name('put');
});
