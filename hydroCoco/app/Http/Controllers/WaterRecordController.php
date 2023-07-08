<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Collection;

class WaterRecordController extends Controller
{
    public function index() {
        return view('waterrecord', [
            'nama' => "USER",
            "records" => Record::get()
        ]);
    }

    // Store data in collection then passing them into Water Alarm view
    public function report() {

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

        // Pass the collection to the view or perform any other operations
        return view('wateralarm', [
            'collection' => $collection,
            'nama' => 'WATER ALARM'
        ]);
    }

        // Store data in collection then passing them into Water Record view
        public function alarm()
    {
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

        // Pass the collection to the view or perform any other operations
        return view('waterrecord', [
            'records' => $records,
            'collection' => $collection,
            'nama' => 'WATER ALARM'
        ]);
    }


}