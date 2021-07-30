<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::post('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
