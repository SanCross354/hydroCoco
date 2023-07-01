<?php

use App\Models\Record;
use App\Models\Pipa;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Wildan Blog'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Wildan Blog'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Wildan Blog'
    ]);
});

// Route + Controller Water Meter Page
Route::get('/watermeter', [WaterMeterController::class, 'index']);

Route::get('/valvecontrol', function () {
    return view('valvecontrol', [
        'title' => 'Valve Controller',
        'valve' => Pipa::all()
    ]);
});
