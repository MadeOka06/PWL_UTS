<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    //
    protected $fillable = [
        'penjualan_id',
        'user_id',
        'pembeli',
        'penjualan_kode',
        'penjualan_tanggal'
    ];
    protected $primaryKey = 'penjualan_id';
    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }
    public function penjualandetail(){
        return $this->hasMany(penjualandetail::class, 'penjualan_id','penjualan_id');
    }
    protected $casts = [
    'penjualan_tanggal' => 'date',
];
}
