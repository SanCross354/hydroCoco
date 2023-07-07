<?php

use App\Models\Record;
use App\Models\Pipa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaterRecordController;
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
// Route::get('/waterrecord', [WaterRecordController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/watermeter', function () {
//     return view('watermeter', [
//         "greeting" => "WELCOME TO OUR HOMEPAGE",
//         "nama" => "Wildan",
//         "title" => "ABOUT"
//     ]);
// });

// Route::get('/wateralarm', function () {
//     return view('wateralarm', [
//         'nama' => 'Water Alarm',
//         // 'alarms' => Record::with(['pipa'])->get()
//     ]);
// });

Route::get('/wateralarm', [WaterRecordController::class, 'report']);
Route::get('/waterrecord', [WaterRecordController::class, 'alarm']);

Route::get('/popo', function () {
    $records = Record::with(['pipa'])->get();

    $collection = collect();
    $data = [];
    $entry = [];
    $subArray = [];

    foreach ($records as $record) {
        $entry = [];
        // Check if $record->pipa is not null
        if ($record->pipa) {
            // Extract the desired values from $record->pipa
            $value1 = $record->pipa->lokasi;
            $value2 = $record->waktu;
            $value3 = $record->pH;
            $value4 = $record->tekanan;
    
            // Perform your condition to determine the result
            $result = '';
    
            if (($record->pH < 6.5 || $record->pH > 8.5) && ($record->tekanan < 45 || $record->tekanan > 80)) {
                $result = 'pH dan Tekanan';
            } elseif ($record->pH < 6.5 || $record->pH > 8.5) {
                $result = 'pH';
            } elseif ($record->tekanan < 45 || $record->tekanan > 80) {
                $result = 'tekanan';
            } else {
                continue; // Skip the row if no problem
            }
    
            // Create an associative array representing a single entry
            $entry = [
                'lokasi' => $value1,
                'waktu' => $value2,
                'pH' => $value3,
                'tekanan' => $value4,
                'result' => $result
            ];
    
            // Insert the entry into the sub-array
             $subArray[] = $entry;
        }
        $data[] = $subArray; // Move this line outside the inner loop
    }
    

    // Push the sub-array to the main collection (placed outside the loop)
    foreach ($data as $item) {
        $innerCollection = collect($item); // Create a collection for each item
        $collection->push($innerCollection); // Push the inner collection to the main collection
    }
    
    // dd($collection);

});
