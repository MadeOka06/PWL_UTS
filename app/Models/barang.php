<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
    protected $primaryKey = 'barang_id';
    protected $fillable = [
        'barang_kode',
        'barang_nama',
        'harga_jual',
        'harga_beli'
    ];
    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategori_id','kategori_id');
    }
}
