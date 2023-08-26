<?php

namespace App\Http\Controllers\MyControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class changeLanguages
{
    public function change_language(Request $request)
    {
        Cookie::queue('language', $request->lang, 10);
        return back();
    }
}
