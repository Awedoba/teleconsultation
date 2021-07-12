<?php

use App\Http\Controllers\DuringTeleconsultController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PriorTeleconsultController;
use App\Http\Controllers\TeleconsultationController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\DuringTeleconsult;
use App\Models\PriorTeleconsult;
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
    return redirect()->route('teleconsult.index');
});

Route::resource('teleconsult',TeleconsultationController::class);
Route::get('/duringTeleconsult/{duringTeleconsult}',[DuringTeleconsultController::class,'destroy'])->name('during.delete');
Route::get('/priorTeleconsult/{priorTeleconsult}',[PriorTeleconsultController::class,'destroy'])->name('prior.delete');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'view'])->name('login');
Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

Route::get('/changepassword', [PasswordController::class, 'edit']);
Route::post('/changepassword', [PasswordController::class, 'store'])->name('password.change');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/users',[UserController::class,'index'])->name('users');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.delete');

Route::get('/resetpassword/{user}', [PasswordController::class, 'reset'])->name('password.reset');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');