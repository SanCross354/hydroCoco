<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

class HourlyPhChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $pipa1 = DB::table('records')
            ->select('pH', 'waktu')
            ->where('idPipa', 1)
            ->get();

        $pipa2 = DB::table('records')
            ->select('pH', 'waktu')
            ->where('idPipa', 2)
            ->get();
        
        $pipa3 = DB::table('records')
            ->select('pH', 'waktu')
            ->where('idPipa', 3)
            ->get();
        
        $pipa4 = DB::table('records')
            ->select('pH', 'waktu')
            ->where('idPipa', 4)
            ->get();
        
        $pipa5 = DB::table('records')
            ->select('pH', 'waktu')
            ->where('idPipa', 5)
            ->get();

        $pHArray = []; // Initialize an empty array
        $titleWaktu = []; // Initialize an empty array

        foreach ($pipa1 as $firstPipa) {
            $pHArray[] = $firstPipa->pH; // Append the value to the array
            $titleWaktu[] = $firstPipa->waktu; // Append the value to the array
        }
        
        foreach ($pipa2 as $firstPipa) {
            $pH2Array[] = $firstPipa->pH; // Append the value to the array
        }
        
        foreach ($pipa3 as $firstPipa) {
            $pH3Array[] = $firstPipa->pH; // Append the value to the array
        }
        
        foreach ($pipa4 as $firstPipa) {
            $pH4Array[] = $firstPipa->pH; // Append the value to the array
        }
        
        foreach ($pipa5 as $firstPipa) {
            $pH5Array[] = $firstPipa->pH; // Append the value to the array
        }

        return $this->chart->lineChart()
            ->setTitle('PH Air di 5 Kabupaten Provinsi DIY')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData("Yogyakarta", $pHArray) // Pass the array of values
            ->addData("Sleman", $pH2Array)
            ->addData("Bantul", $pH3Array)
            ->addData("Gunung Kidul", $pH4Array)
            ->addData("Kulon Progo", $pH5Array)
            ->setXAxis($titleWaktu);
    }
}
