<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValveController extends Controller
{
    public function index() {
        return view('valve', [
            'nama' => "USER",
            "records" => Pipa::with(['pipa'])->get()
        ]);
    }
}
