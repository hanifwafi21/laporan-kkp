<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerdirController;
use App\Http\Controllers\PerdirsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {return view('homepage.dashboard');});
Route::get('/perdirs', function () {return view('homepage.perdir');});
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::resource('perdirs',PerdirsController::class);
