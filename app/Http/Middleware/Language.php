<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\App;
use App;
use Illuminate\Support\Facades\App as FacadesApp;
use Illuminate\Support\Facades\Cookie;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cookie = Cookie::get('language');
        if ($cookie) {
            app()->setlocale($cookie);
        } else {
            app()->setlocale(FacadesApp::currentLocale());
        }
        return $next($request);
    }
}
