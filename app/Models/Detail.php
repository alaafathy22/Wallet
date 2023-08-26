<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class Detail extends Model
{
    use HasFactory;
    protected $table = "details";
    protected $fillable = [
        'id',
        'details',
        'price',
        'user_id',
        'user_id_wallet',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected function ScopeSel($query, $login_user_id, $wallet)
    {
        $query->where('user_id',$login_user_id)->where('user_id_wallet', '=', $wallet);
    }
    protected function ScopeMSum($query, $login_user_id, $wallet)
    {
        $query->where('user_id',$login_user_id)->where('user_id_wallet', '=', $wallet);
    }
    protected function ScopeDel($query, $id, $login_user_id)
    {
        $query->where('id', $id)->where('user_id', $login_user_id);
    }
    protected function ScopeEdit($query, $id, $login_user_id, $wallet)
    {
        $query->where('id', $id)->where('user_id', $login_user_id)->where('user_id_wallet', $wallet);
    }
}
