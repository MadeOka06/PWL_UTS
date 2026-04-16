<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    //
    protected $fillable = [
        'penjualan_id',
        'pembeli',
        'penjualan_kode',
        'penjualan_tanggal'
    ];
    protected $primaryKey = 'penjualan_id';
    public function users(){
        return $this->hasMany(User::class,'user_id','user_id');
    }
    public function penjualandetail(){
        return $this->belongsTo(penjualandetail::class, 'penjualan_id','penjualan_id');
    }
}
