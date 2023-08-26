<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('my_home');
});
Route::get('/home', function () {
    return view('my_home');
});

Route::get('/inputs/{id}/{email}', function ($id, $email) {
    return view('inputs', compact('id', 'email'));
});

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {
    Route::get('real_edit2', 'Controller@real_edit2')->name('real_edit2');
    Route::get('show/{user_id}/{user_email}', 'Controller@sel')->name('show');
    Route::post('inputs_con', 'Controller@inputs_con')->name('inputs_con');
    Route::get('add/{idd}/{user_id}/{user_email}', 'Controller@add')->name('add');
    Route::get('del/{id}/{user_id}/{user_email}', 'Controller@del')->name('del');
    Route::post('your_value', 'Controller@your_value')->name('your_value');
});
Auth::routes();
