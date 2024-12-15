<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Transaction;
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

        $usercount = User::where('role', 'Customer')->count();
        $onprocess = Order::where('status', 'On Progress')->count();
        $allorder = Order::whereMonth('created_at', $currentMonth)->count();

        $regular = Transaction::whereMonth('created_at', $currentMonth)->whereHas('order', function ($query) {
            $query->where('id_layanan', 1);
        })->sum('total_biaya');
        $sameDay = Transaction::whereMonth('created_at', $currentMonth)->whereHas('order', function ($query) {
            $query->where('id_layanan', 2);
        })->sum('total_biaya');
        $nextDay = Transaction::whereMonth('created_at', $currentMonth)->whereHas('order', function ($query) {
            $query->where('id_layanan', 3);
        })->sum('total_biaya');
        $dry = Transaction::whereMonth('created_at', $currentMonth)->whereHas('order', function ($query) {
            $query->where('id_layanan', 4);
        })->sum('total_biaya');
        $iron = Transaction::whereMonth('created_at', $currentMonth)->whereHas('order', function ($query) {
            $query->where('id_layanan', 5);
        })->sum('total_biaya');

        $sum = Transaction::whereMonth('created_at', $currentMonth)->sum('total_biaya');
 
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
