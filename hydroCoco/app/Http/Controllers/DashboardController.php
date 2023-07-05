<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\HourlyPhChart;
use App\Charts\HourlyPressureChart;

class DashboardController extends Controller
{
    public function index(HourlyPhChart $chart, HourlyPressureChart $chart2) {
        return view('dashboard', [
            'nama' => "USER",
            'chart' => $chart->build(),
            'chart2' => $chart2->build(),
        ]);
    }

}
