<?php

namespace App\Http\Controllers\Web;

use App\Models\More;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
class GrafikController extends Controller
{
    public function grafik()
    {
        return view('pages.web.grafik.grafik');
    }
}
