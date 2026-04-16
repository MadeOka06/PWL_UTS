<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function level(){
        return $this->belongsTo(level::class, 'level_id','level_id');
    }
    protected $fillable = [
        'user_id',
        'level_id',
        'username',
        'email',
        'nama',
        'password'
    ];
    protected $primaryKey = 'user_id';
    public function getNameAttribute()
{
    return $this->nama;
}
 public function penjualan(){
        return $this->hasMany(penjualan::class, 'penjualan','penjualan_id');
    }   
}
