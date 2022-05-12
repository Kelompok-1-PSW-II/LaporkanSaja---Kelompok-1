<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporkanController extends Controller
{
    public function hilang(){
        return view('pages.web.laporkan.hilang');
    }
    public function temuan(){
        return view('pages.web.laporkan.temuan');
    }
}
