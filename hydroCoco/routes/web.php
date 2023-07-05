<?php

use App\Models\Record;
use App\Models\Pipa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaterMeterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home', [
//         'nama' => 'Wildan Blog'
//     ]);
// });

Route::get('/login', function () {
    return view('login', [
        'title' => 'Wildan Blog'
    ]);
});

//Guest -> hanya bisa diakses oleh orang yang blm terautentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route + Controller Water Meter Page
Route::get('/watermeter', [WaterMeterController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/watermeter', function () {
//     return view('watermeter', [
//         "greeting" => "WELCOME TO OUR HOMEPAGE",
//         "nama" => "Wildan",
//         "title" => "ABOUT"
//     ]);
// });

Route::get('/valve', function () {
    return view('valve', [
        'nama' => 'Valve Controller',
        'valves' => Pipa::with(['user'])->get()
    ]);
});
