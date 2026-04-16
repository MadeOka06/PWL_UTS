<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        "kategori_kode",
        "kategori_nama"
    ];
    public function barangs(){
        $this->hasMany(Barang::class. 'kategori_id','kategori_id');
    }
}
