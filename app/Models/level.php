<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    //
    protected $primaryKey = 'level_id';
    protected $fillable = [
        "level_id",
        "level_kode",
        "level_nama"
    ];
    public function user(){
        return $this->hasMany(User::class,'level_id','level_id');
    }
}
