<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function pengumuman(){
        return view('pages.web.pengumuman.pengumuman');
    }
}
