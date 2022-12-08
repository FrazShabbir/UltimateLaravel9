<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

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



Route::get('/',[HomeController::class,'index'])->name('public.index');
Route::get('products',[HomeController::class,'products'])->name('public.products');
Route::get('products/show',[HomeController::class,'productsDetail'])->name('public.product.detail');
Route::get('faq',[HomeController::class,'faq'])->name('public.faq');

Route::get('blogs',[HomeController::class,'blogs'])->name('public.blogs');
Route::get('blog/show',[HomeController::class,'blogDetail'])->name('public.blog.detail');


Route::get('cart',[HomeController::class,'cart'])->name('public.cart');
Route::get('cart/step-2',[HomeController::class,'cart_2'])->name('public.cart_2');
Route::get('cart/step-3',[HomeController::class,'cart_3'])->name('public.cart_3');
Route::get('cart/step-4',[HomeController::class,'cart_4'])->name('public.cart_4');
Route::get('cart/step-4/confirm',[HomeController::class,'cart_4_confirm'])->name('public.cart_4_confirm');


Route::get('user/register',[HomeController::class,'register'])->name('public.register');
Route::get('user/login',[HomeController::class,'login'])->name('public.login');


Route::get('moj/profile',[HomeController::class,'profile'])->name('moj.profile');
Route::get('moj/detail',[HomeController::class,'mojDetail'])->name('moj.detail');

Route::get('seller',[HomeController::class,'seller'])->name('public.seller');

require __DIR__.'/auth.php';
