<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjualandetail extends Model
{
    //
    protected $fillable = [
        'barang_id',
        'penjualan_id',
        'harga',
        'jumlah'
    ];
    protected $primaryKey = 'penjualan_id';
    public function penjualan(){
        return $this->hasMany(penjualan::class,'penjualan_id','penjualan_id');
    }
    public function barang(){
        return $this->hasMany(barang::class,'barang_id','barang_id');
    }
}
