<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_layanan',
        'berat',
        'tanggal_pickup',
        'tanggal_antar',
        'status',
        'total_harga',
    ];
    public function user(){
        return $this->belongsto(User::class, 'id_user');
    }
    public function layanan(){
        return $this->belongsto(Layanan::class, 'id_layanan');
    }
}
