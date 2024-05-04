<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
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

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store/{id}', [CartController::class, 'addToCart'])->name('cart.store');

Auth::routes();  //login, logout, registration, password reset
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login'); Example of login route


Route::middleware('auth')->group(function(){

    // Route::get('/my-account',[UserController::class,'index'])->name('user.index');
    Route::get('/user',[UserController::class,'index'])->name('user.index');
});

Route::middleware('auth','auth.admin')->group(function(){
    // AuthAdmin, is a custom middleware that you've created. It extends the functionality of the 'auth' middleware by
    // adding an additional check to ensure that the authenticated user has admin privileges (utype equals 'ADM') before allowing
    //  access to the routes within the group. If the authenticated user does not have admin privileges, it flushes
    //   the session (log out) and redirects them to the login page.

    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');

});