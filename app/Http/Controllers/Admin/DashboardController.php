<?php

namespace App\Http\Controllers\Admin;

use App\Exports\LaporExport;
use Illuminate\Http\Request;
use App\Models\Lapor as Dashboard;
use App\Http\Controllers\Controller;
use Excel;

class DashboardController extends Controller
{
    public function destroy(Dashboard $dashboard)
    {
        $dashboard->delete();
        return redirect('dashboard');
    }
}
