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

class Get_values_Controller extends Main_Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AuthenticatesUsers;

    public function __construct()
    {
    }

    public function your_value(request_your_value $request)
    {
        $this->get_auth_data();
        $login_user_id = $this->login_user_id;
        $login_user_email = $this->login_user_email;
        $wallet = $request->wallet;
        $input_value_you_Havee = $request->input_value_you_Have;
        wallet::GetVal($wallet, $login_user_id)->update(['price' => $input_value_you_Havee]);
        return redirect()->route('sel_show', ['wallet' => $wallet])->with('message', __('masseges.if_edit_value'));
    }
}
