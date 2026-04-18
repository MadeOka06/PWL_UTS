<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    //
    protected $fillable = [
        'stok_id',
        'supplier_id',
        'barang_id',
        'user_id',
        'stok_tanggal',
        'stok_jumlah'
    ];
    protected $primaryKey = 'stok_id';
    public function supplier(){
        return $this->belongsTo(supplier::class,'supplier_id','supplier_id');
    }
     public function barang(){
        return $this->belongsTo(barang::class,'barang_id','barang_id');
    }
    public function user(){
        return $this->belongsTo(user::class,'user_id','user_id');
    }
    public $casts = [
        'stok_tanggal' => 'datetime'
    ];
}
