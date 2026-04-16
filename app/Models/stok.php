<?php

namespace App\Models;

use App\Http\Resources\user;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    //
    protected $fillable = [
        'stok_tunggal',
        'stok_jumlah'
    ];
    protected $primaryKey = 'stok_id';
    public function suppliers(){
        return $this->hasMany(supplier::class,'supplier_id','supplier_id');
    }
     public function barangs(){
        return $this->hasMany(barang::class,'barang_id','barang_id');
    }
    public function users(){
        return $this->hasMany(user::class,'user_id','user_id');
    }
}
