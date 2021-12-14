<?php

use App\Http\Controllers\DuringTeleconsultController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PriorTeleconsultController;
use App\Http\Controllers\TeleconsultationController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CovidController;
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

Route::get('teleconsult/exportRange', [TeleconsultationController::class,'exportRange'])->name('teleconsult.exportRange')->middleware('auth');
Route::get('teleconsult/export', [TeleconsultationController::class,'export'])->name('teleconsult.export')->middleware('auth');
Route::resource('teleconsult',TeleconsultationController::class)->middleware('auth');

//Route::get('/covid/');

Route::get('/duringTeleconsult/{duringTeleconsult}',[DuringTeleconsultController::class,'destroy'])->name('during.delete')->middleware('auth');
Route::get('/priorTeleconsult/{priorTeleconsult}',[PriorTeleconsultController::class,'destroy'])->name('prior.delete')->middleware('auth');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'view'])->name('login');
Route::post('/logout',[LogoutController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/changepassword', [PasswordController::class, 'edit'])->middleware('auth');
Route::post('/changepassword', [PasswordController::class, 'store'])->name('password.change')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('auth');

Route::get('/users',[UserController::class,'index'])->name('users')->middleware('auth');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.delete')->middleware('auth');

Route::get('/resetpassword/{user}', [PasswordController::class, 'reset'])->name('password.reset')->middleware('auth');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::post('/users/{user}', [UserController::class, 'update'])->name('user.update')->middleware('auth');

Route::get('covid/exportRange', [CovidController::class,'exportRange'])->name('covid.exportRange')->middleware('auth');
Route::get('covid/export', [CovidController::class,'export'])->name('covid.export')->middleware('auth');
Route::resource('covid', CovidController::class)->middleware('auth');

