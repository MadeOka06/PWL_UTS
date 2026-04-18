<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $fillable = [
        'supplier_kode',
        'supplier_nama',
        'supplier_alamat'
    ];
    protected $primaryKey = 'supplier_id';
    public function stok(){
        return $this->hasMany(stok::class,'stok_id','stok_id');
    }
    
}
