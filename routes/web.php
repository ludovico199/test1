<?php

use App\Http\Controllers\admin\usercontroller as AdminUsercontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\winetablecontroller;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');
Route::post('/upload-image', [winetableController::class, 'store'])->name('image.store');
Route::get('/wines', [WinetableController::class, 'index'])->name('wines.index');
Route::get('/wines/filter/{type}', [WinetableController::class, 'filter'])->name('wines.filter');
Route::get('/database', [UserController::class, 'database'])->name('database');
Route::get('/wine/{id}', [winetablecontroller::class, 'show'])->name('wine.show');
