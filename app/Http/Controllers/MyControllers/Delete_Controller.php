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

class Delete_Controller extends Main_Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AuthenticatesUsers;

    public function __construct()
    {
    }
    public function del(Request $request, $id, $wallet)
    {
        $this->get_auth_data();
        $login_user_id = $this->login_user_id;
        Detail::Del($id, $login_user_id)->delete();
        return redirect()->route('sel_show', ['wallet' => $wallet]);
    }
}
