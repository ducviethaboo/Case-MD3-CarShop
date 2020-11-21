<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
    return view('user.index');
})->name('home');

Route::prefix('user')->group(function (){
    Route::get('/',[ProductController::class,'showUser'])->name('user.show');
});

Route::prefix('admin')->group(function (){
    Route::get('/',[ProductController::class,'showAdmin'])->name('admin.show');
    Route::get('/{id?}/delete', [ProductController::class,'delete'])->name('admin.delete');
    Route::get('/{id?}/edit', [ProductController::class,'showById'])->name('admin.showById');
    Route::post('/edit', [ProductController::class,'edit'])->name('admin.edit');
    Route::get('/add', [ProductController::class,'showFormAdd'])->name('admin.showFormAdd');
    Route::post('/add', [ProductController::class,'add'])->name('admin.add');
});



