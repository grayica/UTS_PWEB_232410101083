<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'doLogin']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/login', [PageController::class, 'login'])->name('login');
