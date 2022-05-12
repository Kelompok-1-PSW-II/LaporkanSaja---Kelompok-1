<?php

namespace App\Exports;

use App\Models\Lapor;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LaporExport implements FromView
{
    public function view(): View
    {
        $lapor = Lapor::all();
        return view('pages.admin.dashboard.excel' , ['lapor' => $lapor]);
    }
}
