<?php

namespace App\Helpers;

use Carbon\Carbon;
use App\Models\Obat;
use App\Helpers\Helper;
use App\Models\StokObat;
use App\Models\DetailObat;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class Helper{
    public static function getDay($tanggal){
        $day = date('D', strtotime($tanggal));
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        $d = date('d', strtotime($tanggal));
        $m = date('m', strtotime($tanggal));
        $y = date('Y', strtotime($tanggal));
        $j = date('H:i', strtotime($tanggal));
        $mList = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );
        $date=$dayList[$day].', '.$d.' '. $mList[$m].' '.$y;
        return $date;
    }
    public static function getDate($tanggal){
        $d = date('d', strtotime($tanggal));
        $m = date('m', strtotime($tanggal));
        $y = date('Y', strtotime($tanggal));
        $date=$d.'-'. $m.'-'.$y;
        return $date;
    }
}