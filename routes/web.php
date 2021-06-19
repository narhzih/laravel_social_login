<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/', [AuthController::class, 'home']);
Route::get('/auth/login/github', [AuthController::class, 'loginWithGithub'])->name('login-github');
Route::get('/auth/login/github/complete', [AuthController::class, 'doLoginWithGithub'])->name('do-login-github');
Route::get('/auth/login/facebook', [AuthController::class, 'loginWithFacebook'])->name('login-facebook');
