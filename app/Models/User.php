<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//class User extends Authenticatable implements MustVerifyEmail
class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

  
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'photo',
        'password',
    ];
    protected $hidden = ['created_at','updated_at'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function user_wallets()
    {
        return $this->hasMany('App\Models\Wallet','user_id','id'); 
    }
}
