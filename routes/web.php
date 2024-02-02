<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\dasboardController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;
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

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::post('/register', [homeController::class, 'register']);
Route::post('/login', [homeController::class, 'login']);

Route::get('/home', function () {
    $cek = 'cek';
    return view('home', ["cek" => $cek]);
});
Route::put('/resources/{id}', [aboutController::class, 'update'])->name('resource.update');
