<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Layanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DashboardController extends Controller
{
    use ValidatesRequests;

    public function index(){
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $monthName = Carbon::createFromFormat('m', $currentMonth)->format('F');

        $usercount = User::all()->count();
        $onprocess = Order::where('status', 'On Progress')->count();
        $allorder = Order::whereMonth('created_at', $currentMonth)->count();

        $regular = Order::whereMonth('created_at', $currentMonth)->where('id_layanan', 1)->where('status', 'Delivered')->sum('total_harga');
        $sameDay = Order::whereMonth('created_at', $currentMonth)->where('id_layanan', 2)->where('status', 'Delivered')->sum('total_harga');
        $nextDay = Order::whereMonth('created_at', $currentMonth)->where('id_layanan', 3)->where('status', 'Delivered')->sum('total_harga');
        $dry = Order::whereMonth('created_at', $currentMonth)->where('id_layanan', 4)->where('status', 'Delivered')->sum('total_harga');
        $iron = Order::whereMonth('created_at', $currentMonth)->where('id_layanan', 5)->where('status', 'Delivered')->sum('total_harga');

        $sum = Order::whereMonth('created_at', $currentMonth)->where('status', 'Delivered')->sum('total_harga');

        $dashboardData = [
            'month' => $monthName,
            'year' => $currentYear,
            'userCount' => $usercount,
            'onprocess' => $onprocess,
            'allorder' => $allorder,
            'regular' => $regular,
            'sameDay' => $sameDay,
            'nextDay' => $nextDay,
            'dry' => $dry,
            'iron' => $iron,
            'totalRev' => $sum
        ];
        return view('admin.overview', $dashboardData);
    }
}
