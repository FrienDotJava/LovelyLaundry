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

class OrderController extends Controller
{
    use ValidatesRequests;

    public function index(){
        $userId = Auth::id();
        if(Auth::user()->role == 'Administrator'){
            $order = Order::orderBy('created_at', 'desc')->paginate(10);
            $layanan = Layanan::all();
            return view('admin.manage_order', compact('order', 'layanan'));
        }else{
            $order = Order::where('id_user', $userId)->where('status', '!=', 'Delivered')->orderBy('created_at', 'desc')->get();
            return view('user.order', compact('order'));
        }
    }

    public function create(){
        $layanan = Layanan::all();
        return view('user.makeorder', compact('layanan'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'service' => 'required',
            'weight' => 'required',
            'date' => 'required',
        ], [
            'service.required' => 'Service cannot be empty.',
            'weight.required' => 'Weight cannot be empty.',
            'date.required' => 'Date cannot be empty.',
        ]);
        $userId = Auth::id();

        $idLayanan = $request->service;
        $layanan = Layanan::find($idLayanan);
        $berat = $request->weight;

        Order::create([
            'id_user' => $userId,
            'id_layanan' => $idLayanan,
            'berat' => $berat,
            'tanggal_pickup' => $request->date,
            'tanggal_antar' => null,
            'status' => "Waiting Pickup"
        ]);
        try{
            return redirect()->route('order.index');
        } catch (Exception $e){
            return redirect()->route('order.index');
        }
    }
    public function edit($id){
        $order = Order::find($id);
        $layanan = Layanan::all();
        return view('admin.edit_order', compact('order', 'layanan'));
    }
    public function update(Request $request, $id){
        $order = Order::find($id);
        $this->validate($request, [
            'service' => 'required',
            'weight' => 'required',
            'date' => 'required',
            'status' => 'required'
        ], [
            'service.required' => 'Service cannot be empty.',
            'weight.required' => 'Weight cannot be empty.',
            'date.required' => 'Date cannot be empty.',
            'status.required' => 'Status cannot be empty.',
        ]);

        $userId = Auth::id();

        $idLayanan = $request->service;
        $berat = $request->weight;
        
        $order->id_layanan = $idLayanan;
        $order->berat = $berat;
        $order->tanggal_pickup = $request->date;
        $order->tanggal_antar = null;
        $order->status = $request->status;

        $order->save();

        $transaction = Transaction::where('id_order',$order->id)->get();
        foreach($transaction as $item){
            $item->total_biaya = ($order->berat * $order->layanan->harga_per_unit) + 3000;
            $item->save();
        }

        try{
            return redirect()->route('order.index')->with(['success' => 'Data has been successfully updated!']);
        } catch (Exception $e){
            return redirect()->route('order.index')->with(['error' => 'Failed to update data!']);
        }
        
    }

    public function showHistory(){
        $userId = Auth::id();
        $transaction = Transaction::where('id_user', $userId)->get();
        return view('user.history', compact('transaction'));
    }

    public function destroy($id){
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('manageorder')->with(['success' => 'Data has been successfully deleted!']);
    }

    public function search(Request $request)
    {
        $query = $request->query('name');

        $order = Order::whereHas('user', function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'LIKE', '%' . $query . '%');
        })->paginate(10);

        return view('admin.manage_order', compact('order'));
    }

    public function showTransaction($id)
    {
        $userID = Auth::id();
        $user = User::find($userID);
        $order = Order::find($id);

        return view('user.transaction', compact('order', 'user'));
    }
}
