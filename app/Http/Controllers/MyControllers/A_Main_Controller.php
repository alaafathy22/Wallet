<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Requests\request_inputs_con;
use App\Http\Requests\request_real_edit;
use App\Http\Requests\request_user_wallet;
use App\Http\Requests\request_your_value;
use Illuminate\Http\Request;
use App\Models\FirstModel;
use App\Models\Detail;
use App\Models\User_wallet;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Empty_;
use Psy\CodeCleaner\IssetPass;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Main_Controller;

class A_Main_Controller extends Main_Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AuthenticatesUsers;

    public function __construct()
    {
    }

    public function con_show(Request $request)
    {
        //this is the man class to show the main page that name is == "show"
        $this->get_auth_data();
        $wallet = $request->wallet; //wallet is the id of wallet to get wallet data
        $login_user_id = $this->login_user_id;
        $login_user_email = $this->login_user_email;
        $sel_wallet_min = wallet::where('user_id', '=', $login_user_id)->min('id');
        $sel_wallet = wallet::where('user_id', '=', $login_user_id)->get();
        $sel_wallet_count =  wallet::where('user_id', $login_user_id)->count();


        if (isset($wallet)) {
            $wallet = $wallet;
        } elseif ($sel_wallet_count == 0) {
            return view("/welcome_wallet");
        } else {
            $wallet = $sel_wallet_min;
        }
        $sel = Detail::Sel($login_user_id, $wallet)->paginate(config('app.custom_pagination'));

        $sel->withPath('/home?wallet=' . $wallet);

        $sel_sum = Detail::MSum($login_user_id, $wallet)->sum('price');

        $sel_value = wallet::MVal($login_user_id, $wallet)->get('price');
        $sel_value = collect($sel_value[0])->first();

        return view('/show', compact('sel', 'sel_sum', 'sel_value', 'sel_wallet', 'wallet', 'login_user_id', 'login_user_email'));
    }
}
