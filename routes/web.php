<?php

use App\Http\Controllers\ImageUploadController;
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
Route::get('/',function (){
    return redirect()->route('index',['lang' => 'uk']);
});

Route::prefix('{lang}') -> group(function () {
    Route::get('/', [\App\Http\Controllers\indexController::class,'index'])->name('index');
    Route::post('mail', [\App\Http\Controllers\MailController::class,'index'])->name('mail');
    Route::get('/projects', function () {
        return view('projects');
    });



    Route::prefix('news')->name('news.')-> group(function(){
        Route::get('/',[\App\Http\Controllers\NewsController::class,'index']);
        Route::get('get',[\App\Http\Controllers\NewsController::class,'get'])->name('get');
        Route::get('create',[\App\Http\Controllers\NewsController::class,'create'])->name('create');
        Route::post('put',[\App\Http\Controllers\NewsController::class,'put'])->name('put');

    });
});


