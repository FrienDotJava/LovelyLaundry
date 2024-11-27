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

class OrderController extends Controller
{
    use ValidatesRequests;

    public function index(){
        $userId = Auth::id();
        if(Auth::user()->role == 'Administrator'){
            $order = Order::all();
            return view('admin.manage_order', compact('order'));
        }else{
            $order = Order::where('id_user', $userId)->get();
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
            'service.required' => 'Layanan tidak boleh kosong.',
            'weight.required' => 'Berat tidak boleh kosong.',
            'date.required' => 'Tanggal tidak boleh kosong.',
        ]);
        $userId = Auth::id();

        $idLayanan = $request->service;
        $layanan = Layanan::find($idLayanan);
        $berat = $request->weight;
        $total = $layanan->harga_per_unit * $berat;

        Order::create([
            'id_user' => $userId,
            'id_layanan' => $idLayanan,
            'berat' => $berat,
            'tanggal_pickup' => $request->date,
            'tanggal_antar' => null,
            'status' => "Waiting Pickup",
            'total_harga' => $total
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
        return view('order.edit', compact('order', 'layanan'));
    }
    public function update(Request $request, $id){
        $order = Order::find($id);
        $this->validate($request, [
            'service' => 'required',
            'weight' => 'required',
            'date' => 'required',
            'status' => 'required'
        ], [
            'service.required' => 'Layanan tidak boleh kosong.',
            'weight.required' => 'Berat tidak boleh kosong.',
            'date.required' => 'Tanggal tidak boleh kosong.',
            'status.required' => 'Status tidak boleh kosong.',
        ]);

        $userId = Auth::id();

        $idLayanan = $request->service;
        $layanan = Layanan::find($idLayanan);
        $berat = $request->weight;
        $total = $layanan->harga_per_unit * $berat;
        
        $order->id_layanan = $idLayanan;
        $order->berat = $berat;
        $order->tanggal_pickup = $request->date;
        $order->tanggal_antar = null;
        $order->status = $request->status;
        $order->total_harga = $total;

        $order->save();

        try{
            return redirect()->route('admin.manage_order')->with(['success' => 'Data Berhasil Diubah!']);
        } catch (Exception $e){
            return redirect()->route('admin.manage_order')->with(['success' => 'Data Berhasil Diubah!']);
        }
        
    }

    public function handleDeliver($id){
        $order = Order::find($id);

        $currentDate = Carbon::today()->toDateString(); 

        $order->tanggal_antar = $currentDate;
        $order->status = "Delivered";
        $order->save();

        $userId = Auth::id();
        $order = Order::where('status', 'Delivered')->where('id_user', $userId)->get();
        return view('user.history', compact('order'));
    }
    public function destroy($id){
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('admin.manage_order')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
