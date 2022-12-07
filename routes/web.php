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
Route::get('contact',[HomeController::class,'contact'])->name('public.contact');


require __DIR__.'/auth.php';
