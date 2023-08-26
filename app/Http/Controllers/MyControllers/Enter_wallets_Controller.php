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
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Main_Controller;

class Enter_wallets_Controller extends Main_Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AuthenticatesUsers;

    public function __construct()
    {
    }
    public function user_wallet(request_user_wallet $request)
    {
        $this->get_auth_data();
        $login_user_id = $this->login_user_id;
        $name_wallet = $request->name_wallet;
        $input_number_wallet = $request->input_number_wallet;
        $wallet = $request->wallet;
        $sel_count =  wallet::where('user_id', $login_user_id)->count();
        if ($sel_count < 5) {
            wallet::create([
                'name_wallet' => $name_wallet,
                'price' => $input_number_wallet,
                'user_id' => $login_user_id
            ]);
            $sel_wallet_max = wallet::where('user_id', $login_user_id)->max('id');
            $wallet = $sel_wallet_max;
            return redirect()->route('sel_show', ['wallet' => $wallet]);
        } else {
            return view('oops', compact('wallet'));
        }
    }
}
