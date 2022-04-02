<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\WithdrawController;
use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\Api\StoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('login', [AuthController::class, "login"]);
    Route::post('logout', [AuthController::class, "logout"]);
    Route::post('refresh', [AuthController::class, "refresh"]);
    // Route::post('profile', [AuthController::class, "me"]);

    Route::post('register', [RegisterController::class, "register"])->name('user.register');
    Route::post('resend_otp', [RegisterController::class, "resend_otp"])->name('resend.otp');
    Route::post('verify_phone_number', [RegisterController::class, "verify_phone_number"])->name('verify.user.account');
    Route::post('forget_password_otp', [RegisterController::class, "forget_otp"])->name('forget.otp');
    Route::post('forget_password', [RegisterController::class, "forget_password"])->name('forget_password');
});

Route::get('system/maintainance', [RegisterController::class, "systm_maintanace"]);

  // profile routes
Route::group(['prefix' => 'profile'], function ($router) {

    Route::post('/profile', [ProfileController::class, "view_propile"])->name('user.profile.view');
    Route::get('get_balance', [ProfileController::class, "get_balance"])->name('user.get_balance');
    Route::get('get_activation_status', [ProfileController::class, "get_active"])->name('user.get_activation');
    Route::post('update_profile', [ProfileController::class, "update_profile"])->name('user.profile.update');
    Route::post('change_password', [ProfileController::class, "change_password"])->name('user.change_password');
    Route::post('active_account', [ProfileController::class, "active_account"])->name('user.active_account');
    Route::post('invalid_click', [ProfileController::class, "invalid_click"])->name('user.invalid_click');
});


 //payment and Withdraw
Route::group(['prefix' => 'withdraw'], function ($router) {

       Route::post('withdraw', [WithdrawController::class, "withdraw"])->name('user.withdraw');
       Route::get('get_payment', [WithdrawController::class, "get_payment"])->name('user.get_payment');
       Route::post('set_self_payment', [WithdrawController::class, "set_self_payment"])->name('set.self.payment');
       Route::get('get_self_payment', [WithdrawController::class, "get_self_payment"])->name('get.self.payment');
});

 //users working routes
Route::group(['prefix' => 'work'], function ($router) {

       Route::get('get_work', [WorkController::class, "get_work"]);
       Route::post('working_wage', [WorkController::class, "working_wage"]);
});

Route::group(['prefix' => 'story'], function ($router) {
       Route::get('get_story/{type}', [StoryController::class, "get_story"]);
       Route::get('single_story/{id}', [StoryController::class, "single_story"]);
       
});





