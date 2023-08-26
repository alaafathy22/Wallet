<?php

use GuzzleHttp\Middleware;
use Illuminate\Pagination\PaginationState;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'App\Http\Controllers\MyControllers', 'middleware' => ['prevent_Back_History', 'auth']], function () {
    Route::get('real_edit', 'Edit_Controller@real_edit')->name('real_edit');
    Route::get('search_live', 'A_Main_Controller@search_live_control')->name('search_live');
    Route::get('search_live_forDetails', 'A_Main_Controller@search_live_control_forDetails')->name('search_live_forDetails');
    Route::get('inputs_con', 'inputs_details_Controller@inputs_con')->name('inputs_con');
    Route::get('del/{id}/{wallet}', 'Delete_Controller@del')->name('del');
    Route::get('your_value', 'Get_values_Controller@your_value')->name('your_value');
    Route::get('user_wallet', 'Enter_wallets_Controller@user_wallet')->name('user_wallet');
    Route::get('home', 'A_Main_Controller@con_show')->name('sel_show');
    Route::get('index', 'Test_Controller@index')->name('index');

});

Route::group(['middleware' => ['prevent_Back_History']], function () {
    Route::get('change_language', 'App\Http\Controllers\MyControllers\changeLanguages@change_language')->name('change_language');
    
});
Auth::routes();
Route::get('/inputs', function () {
    return view('inputs');
})->name('inputs')->middleware(['auth', 'prevent_Back_History']);

Route::get('/first_user_wallet', function () {
    return view('first_user_wallet');
})->name('first_user_wallet')->middleware(['auth', 'prevent_Back_History']);

Route::get('setting', function () {
    return view('setting');
})->middleware(['auth', 'prevent_Back_History'])->name('setting');


Route::get('/edit/{name}/{price}/{id}/{wallet}/{update_allsum}', function ($name, $price, $id, $wallet, $update_allsum) {
    return view('edit', compact('name', 'price', 'id', 'wallet', 'update_allsum'));
})->name('edit')->middleware(['auth', 'prevent_Back_History']);

/** if customer wrote link not handled before in code i will transfer you to this links */
Route::fallback(function () {
    if (Auth::guard('web')->check()) {
        return redirect('/home');
    } else {
        return view('auth.login');
    }
});


// /* ----------------------------------- start login by facebook and google ----------------------------------- */

// Route::group(['namespace' => 'App\Http\Controllers\MyControllers'], function () {
//     Route::get('login_facebook/{services}', 'signUp_google@login_facebook')->name('login_facebook');
//     Route::get('callback/{services}', 'signUp_google@callback')->name('callback');
// });
// /* ----------------------------------- end login by facebook and google ----------------------------------- */
