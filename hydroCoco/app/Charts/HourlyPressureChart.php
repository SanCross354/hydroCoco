<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

class HourlyPressureChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $pipa1 = DB::table('records')
            ->select('tekanan', 'waktu')
            ->where('idPipa', 1)
            ->get();

        $pipa2 = DB::table('records')
            ->select('tekanan', 'waktu')
            ->where('idPipa', 2)
            ->get();
        
        $pipa3 = DB::table('records')
            ->select('tekanan', 'waktu')
            ->where('idPipa', 3)
            ->get();
        
        $pipa4 = DB::table('records')
            ->select('tekanan', 'waktu')
            ->where('idPipa', 4)
            ->get();
        
        $pipa5 = DB::table('records')
            ->select('tekanan', 'waktu')
            ->where('idPipa', 5)
            ->get();

        $tekananArray = []; // Initialize an empty array
        $titleWaktu = []; // Initialize an empty array

        foreach ($pipa1 as $firstPipa) {
            $tekananArray[] = $firstPipa->tekanan; // Append the value to the array
            $titleWaktu[] = $firstPipa->waktu; // Append the value to the array
        }
        
        foreach ($pipa2 as $firstPipa) {
            $tekanan2Array[] = $firstPipa->tekanan; // Append the value to the array
        }
        
        foreach ($pipa3 as $firstPipa) {
            $tekanan3Array[] = $firstPipa->tekanan; // Append the value to the array
        }
        
        foreach ($pipa4 as $firstPipa) {
            $tekanan4Array[] = $firstPipa->tekanan; // Append the value to the array
        }
        
        foreach ($pipa5 as $firstPipa) {
            $tekanan5Array[] = $firstPipa->tekanan; // Append the value to the array
        }
        
        return $this->chart->barChart()
            ->setTitle('Tekanan Air di 5 Kabupaten Provinsi DIY')
            ->setSubtitle('Wins during season 2021.')
            ->addData("Yogyakarta", $tekananArray) // Pass the array of values
            ->addData("Sleman", $tekanan2Array)
            ->addData("Bantul", $tekanan3Array)
            ->addData("Gunung Kidul", $tekanan4Array)
            ->addData("Kulon Progo", $tekanan5Array)
            ->setXAxis($titleWaktu);
    }
}
