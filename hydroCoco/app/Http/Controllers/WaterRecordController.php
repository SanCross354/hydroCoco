<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class WaterRecordController extends Controller
{
    public function index() {
        return view('waterrecord', [
            'nama' => "USER",
            "records" => Record::get()
        ]);
    }


}
