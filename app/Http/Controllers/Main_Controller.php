<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class Main_Controller extends Controller
{
    public $login_user_id;
    public $login_user_email;

    public function get_auth_data()
    {
        //this is the man class to show the main page that name is == "show"
        $this->login_user_id = Auth::user()->id;
        $this->login_user_email = Auth::user()->email;
    }
}
