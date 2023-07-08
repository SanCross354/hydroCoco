<?php

use App\Models\Record;
use App\Models\Pipa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaterRecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

use App\Charts\HourlyPhChart;
use App\Charts\HourlyPressureChart;
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
// Route::get('/dashboard', [DashboardController::class, 'notification'])->middleware('auth');

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

Route::get('js/toastr.js', function () {
    return response(file_get_contents(public_path('js/toastr.min.js')), 200, [
        'Content-Type' => 'application/javascript',
    ]);
});


Route::get('/popo', function (HourlyPhChart $chart, HourlyPressureChart $chart2) {
    $records = Record::with('pipa')->get();

        $collection = collect();

        foreach ($records as $record) {
            $pipa = $record->pipa; // Retrieve the related pipa using the relationship

            if ($pipa) {
                // Extract the desired values from the pipa
                $value1 = $pipa->lokasi;
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

                // Push the entry into the collection
                $collection->push($entry);
            }
        }

    dd($collection);

        // if($collection->isNotEmpty()) {
        //     return view('dashboard', [
        //         'nama' => "USER",
        //         'chart' => $chart->build(),
        //         'chart2' => $chart2->build(),
        //     ])->with('message', 'Terjadi masalah pada pipa');
        // } else {
        //     return view('dashboard', [
        //         'nama' => "USER",
        //         'chart' => $chart->build(),
        //         'chart2' => $chart2->build(),
        //     ]);
        // }
    

});
