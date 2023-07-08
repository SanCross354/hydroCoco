<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\HourlyPhChart;
use App\Charts\HourlyPressureChart;
use App\Models\Record;
use Toastr;

class DashboardController extends Controller
{
    public function index(HourlyPhChart $chart, HourlyPressureChart $chart2) {
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

        if ($collection->isNotEmpty()) {
            Toastr::error('Terjadi masalah pada pipa', 'Notification', ["positionClass" => "toast-top-right", "progressBar" => true, "closeButton" => true]);
            return view('dashboard', [
                'nama' => 'USER',
                'chart' => $chart->build(),
                'chart2' => $chart2->build(),
            ]);
        } else {
            Toastr::success('Tidak ada masalah pada pipa', 'Notification', ["positionClass" => "toast-top-right", "progressBar" => true, "closeButton" => true]);
            return view('dashboard', [
                'nama' => 'USER',
                'chart' => $chart->build(),
                'chart2' => $chart2->build(),
            ]);
        }
    }
}
