<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemukanController extends Controller
{
    public function temukan(){
        return view('pages.web.temukan.temukan');
    }
}
?>