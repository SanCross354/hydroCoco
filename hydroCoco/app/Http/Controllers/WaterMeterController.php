<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class WaterMeterController extends Controller
{
    public function index() {
        return view('watermeter', [
            'title' => "Water Meter",
            "record" => Record::with(['pipa'])->get()
        ]);
    }


}
