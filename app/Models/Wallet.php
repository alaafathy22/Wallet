<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{

    use HasFactory;
    protected $table = 'wallets';

    protected $fillable = [
        'id',
        'name_wallet',
        'price',
        'user_id',
    ];



    protected $hidden = ['created_at', 'updated_at'];

    public function user_wallets()
    {
        return $this->hasMany('App\Models\Detail', 'user_id_wallet', 'id');
    }
    protected function ScopeMVal($query, $login_user_id, $wallet)
    {
        $query->where('user_id', '=', $login_user_id)->where('id', '=', $wallet);
    }
    protected function ScopeGetVal($query, $wallet, $login_user_id)
    {
        $query->where('id', $wallet)->where('user_id', $login_user_id);
    }
}
