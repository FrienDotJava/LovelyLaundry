<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Layanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TransactionController extends Controller
{
    use ValidatesRequests;


    public function createTransaction($id)
    {
        $userID = Auth::id();
        $user = User::find($userID);
        $tempOrder = Order::find($id);

        return view('user.transaction', compact('tempOrder', 'user'));
    }
    
    public function storeTransaction(Request $request, $id){
        $this->validate($request, [
            'metode' => 'required',
        ]);
        $userId = Auth::id();
        $order = Order::find($id);

        $currentDate = Carbon::today()->toDateString(); 
        $metode = $request->metode;

        $total = ($order->berat * $order->layanan->harga_per_unit) + 3000;

        $order->status = "Delivered";
        $order->save();

        Transaction::create([
            'id_user' => $userId,
            'id_order' => $order->id,
            'tanggal_transaksi' => $currentDate,
            'metode_bayar' => $metode,
            'total_biaya' => $total
        ]);
        try{
            return redirect()->route('order.index');
        } catch (Exception $e){
            return redirect()->route('order.index');
        }
    }

}
