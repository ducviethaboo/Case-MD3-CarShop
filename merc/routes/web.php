<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoadPage;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestDriverController;
use App\Http\Controllers\UserController;
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



Route::get('/', [UserController::class,'showPageGuest'])->name('home');


Route::prefix('user')->group(function (){
    Route::get('/',[LoadPage::class,'showProductUser'])->name('user.show');
    Route::middleware('auth')->get('/test-driver-register', [LoadPage::class,'PageRegisterTestDriverLoad'])->name('user.testDriveRegister');
    Route::get('/{id}/detail', [ProductController::class, 'showProductDetail'])->name('user.showByid');
    Route::post('/search', [ProductController::class, 'searchProduct'])->name('user.search');
    Route::middleware('auth')->get('/buy', [LoadPage::class,'showFormBuy'])->name('user.buy.form');
    Route::get('/account', [AccountController::class,'getAccountDetail'])->name('user.account.detail');
    Route::post('/testdriver', [RegisterController::class,'testDriverRegister'])->name('user.testdriver.register');
});

Route::prefix('login')->group(function (){
    Route::get('/', [LoadPage::class,'showPageUserLogin'])->name('login');
    Route::post('/loginform', [LoginController::class,'checkLogin'])->name('login.check');
    Route::post('/', [LoginController::class,'logout'])->name('logout');
    Route::get('/register', [LoadPage::class,'showPageUserRegister'])->name('user.register');
    Route::post('/register', [AccountController::class,'registerAccount'])->name('user.registerPost');

});



Route::prefix('admin')->group(function (){
    Route::get('/home', [LoadPage::class, 'showAdminHomePage'])->name('admin.home');

    //Products
    Route::get('/',[UserController::class,'showPageAdmin'])->name('admin.show');
    Route::get('/manager',[LoadPage::class,'showAdminPage'])->name('admin.show.product');
    Route::get('/{id?}/delete', [ProductController::class,'delete'])->name('admin.delete');
    Route::get('/{id?}/edit', [ProductController::class,'showById'])->name('admin.showById');
    Route::post('/edit', [ProductController::class,'edit'])->name('admin.edit');
    Route::get('/add', [LoadPage::class,'showFormAddByAdmin'])->name('admin.showFormAdd');
    Route::post('/add', [ProductController::class,'add'])->name('admin.add');

    //Accounts
    Route::get('/account', [AccountController::class,'getAllAccount'])->name('admin.account');
    Route::get('{id}/account', [AccountController::class,'showFormEditUserRole'])->name('admin.edit.account');
    Route::get('{id}/account/delete', [AccountController::class,'deleteAccount'])->name('admin.delete.account');
    Route::post('{id}/account/delete', [AccountController::class,'deleteAccount'])->name('admin.delete.account');
    Route::post('/account', [AccountController::class,'editUserRole'])->name('admin.edit.account.post');


    //TestDriver
    Route::get('/test-drivers', [TestDriverController::class,'getAll'])->name('admin.test-driver-list');
    Route::get('{id}/edit-test-drivers', [TestDriverController::class,'getAllById'])->name('admin.edit-test-driver');
    Route::post('/edit-test-drivers', [TestDriverController::class,'editStatusTest'])->name('admin.edit-status-test-driver');
});




