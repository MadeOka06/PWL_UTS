<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjualandetail extends Model
{
    //
    protected $fillable = [
        'penjualan_id',
        'barang_id',
        'detail_id',
        'harga',
        'jumlah'
    ];
    protected $primaryKey = 'detail_id';
    public function penjualan(){
        return $this->belongsTo(penjualan::class,'penjualan_id','penjualan_id');
    }
    public function barang(){
        return $this->belongsTo(barang::class,'barang_id','barang_id');
    }
    
}
