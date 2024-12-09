<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_order',
        'tanggal_transaksi',
        'metode_bayar',
        'total_biaya',
    ];
    public function user(){
        return $this->belongsto(User::class, 'id_user');
    }
    public function order(){
        return $this->belongsto(Order::class, 'id_order');
    }
}
