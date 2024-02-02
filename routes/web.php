<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\dasboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::middleware('auth:users')->group(function () {
    // Rute yang memerlukan otentikasi
});
Route::get('/dashboard', [dasboardController::class, 'index'])->name('dashboards');
Route::post('/register', [registerController::class, 'register']);
Route::post('/login', [loginController::class, 'login']);

Route::get('/home', function () {
    $cek = 'cek';
    return view('home', ["cek" => $cek]);
});
Route::put('/resources/{id}', [aboutController::class, 'update'])->name('resource.update');
