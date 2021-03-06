<?php

use App\Http\Controllers\PostController;
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
    return view('backend.master');
});



Route::prefix("posts")->group(function (){
    Route::get('/index',[PostController::class,'index'])->name('posts.index');
    Route::get('{id}/show',[PostController::class,'show'])->name('posts.show');
    Route::get('{id}/destroy',[PostController::class,'destroy'])->name('posts.destroy');

});