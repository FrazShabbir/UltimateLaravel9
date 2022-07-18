<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\DesignationController;

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
    if (auth()->check()) {
        return redirect(url('/dashboard'));
    } else {
        return redirect('/login');
    }
});

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'],function () {

    Route::get('/', [GeneralController::class, 'dashboard'])->name('dashboard');
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('designations', DesignationController::class);
    
    Route::get('reset-password/{user}', [UserController::class, 'reset_password'])->name('users.reset_password');
    Route::get('my-profile', [GeneralController::class, 'myProfile'])->name('site.myProfile');
    Route::get('site-settings', [GeneralController::class, 'siteSettings'])->name('site.siteSettings');
    Route::post('/site-settings-save', [GeneralController::class, 'save_general_settings'])->name('site_settings_save');    
});
require __DIR__.'/auth.php';
