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

class inputs_details_Controller extends A_Main_Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AuthenticatesUsers;

    public function __construct()
    {
    }


    public function inputs_con(request_inputs_con $request)
    {

        $this->get_auth_data();
        $login_user_id = $this->login_user_id;
        $login_user_email = $this->login_user_email;
        $details = $request->message;
        $value = $request->input_number;
        $wallet = $request->wallet;
        $sel_sum = $this->con_show($request)->sel_sum;
        $sel_value = $this->con_show($request)->sel_value;

        if ($sel_sum + $value > $sel_value) {
            return view('oops_not_enough', compact('wallet'));
        } else {
            $details = Detail::create([
                'details' => $details,
                'price' => $value,
                'user_id' => $login_user_id,
                'user_id_wallet' => $wallet,
            ]);
            return redirect()->route('sel_show', ['wallet' => $wallet]);
        }
    }
}
