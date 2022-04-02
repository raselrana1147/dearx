<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Advertisement\AdvertisementController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\WithdrawController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\ActiveCodeController;
use App\Http\Controllers\Admin\StoryController;




// Route::get('/up', function() {
//     \Artisan::call('up');

//     return "up";
// });



// Route::get('/down', function() {
//     \Artisan::call('down --secret=123');

//     return "down";
// });

Route::get('/', function() {
    return view('welcome');
})->name('home.page');

Route::get('/privacy_policy', function() {
    return view('privacy_policy');
})->name('privacy_policy');

Route::get('/terms_condition', function() {
    return view('terms_condition');
})->name('term_condition');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix'=>'admin'],function(){
	
	Route::get('/login',[LoginController::class,'loginForm'])->name('admin.login');
    Route::post('/login',[LoginController::class,'login'])->name('admin.login.submit');
    Route::post('/logout',[LoginController::class,'logout'])->name('admin.logout');
    Route::get('/dashboard',[AdminController::class,"index"])->name('admin.dashboard');
    Route::get('/profile',[AdminController::class,"profile"])->name('admin.profile');
    Route::post('/update_profile',[AdminController::class,"update_profile"])->name('admin.update_profile');
    Route::post('/change_password',[AdminController::class,"change_password"])->name('admin.change_password');
    
    // Advertisement Controller
	Route::get('advertisement',[AdvertisementController::class,"index"])->name('advertisement.index');
	Route::get('load_advertisment',[AdvertisementController::class,"datatable"])->name('load_advertisment');
	Route::get('create_advertisement',[AdvertisementController::class,"create"])->name('advertisement.create');
	Route::post('create_advertisement',[AdvertisementController::class,"store"])->name('advertisement.store');
	Route::get('edit_advertisement/{id}',[AdvertisementController::class,"edit"])->name('advertisement.edit');
	Route::post('update_advertisement',[AdvertisementController::class,"update"])->name('advertisement.update');
	Route::post('delete_advertisement',[AdvertisementController::class,"delete"])->name('advertisement.delete');

	   // Story Controller
	Route::get('story',[StoryController::class,"index"])->name('story.index');
	Route::get('load_story',[StoryController::class,"datatable"])->name('load_story');
	Route::get('create_story',[StoryController::class,"create"])->name('story.create');
	Route::post('create_story',[StoryController::class,"store"])->name('story.store');
	Route::get('edit_story/{id}',[StoryController::class,"edit"])->name('story.edit');
	Route::post('update_story',[StoryController::class,"update"])->name('story.update');
	Route::post('delete_story',[StoryController::class,"delete"])->name('story.delete');

	// Activation Code
	Route::get('activation_code',[ActiveCodeController::class,"index"])->name('activation_code.index');
	Route::get('load_activation_code',[ActiveCodeController::class,"datatable"])->name('load_activation_code');
	Route::get('create_activation_code',[ActiveCodeController::class,"create"])->name('activation_code.create');
	Route::post('create_activation_code',[ActiveCodeController::class,"store"])->name('activation_code.store');
	Route::get('edit_activation_code/{id}',[ActiveCodeController::class,"edit"])->name('activation_code.edit');
	Route::post('update_activation_code',[ActiveCodeController::class,"update"])->name('activation_code.update');
	Route::post('delete_activation_code',[ActiveCodeController::class,"delete"])->name('activation_code.delete');

	//Payment Controller
	Route::get('payment',[PaymentController::class,"index"])->name('payment.index');
	Route::get('load_payment',[PaymentController::class,"datatable"])->name('load_payment');
	Route::get('create_payment',[PaymentController::class,"create"])->name('payment.create');
	Route::post('create_payment',[PaymentController::class,"store"])->name('payment.store');
	Route::get('edit_payment/{id}',[PaymentController::class,"edit"])->name('payment.edit');
	Route::post('update_payment',[PaymentController::class,"update"])->name('payment.update');
	Route::post('delete_payment',[PaymentController::class,"delete"])->name('payment.delete');

	//Withdraw Controller
	Route::get('withdraw',[WithdrawController::class,"index"])->name('withdraw.index');
	Route::get('load_withdraw',[WithdrawController::class,"datatable"])->name('load_withdraw');
	Route::post('change_withdraw_status',[WithdrawController::class,"withdraw_status"])->name('change_withdraw_status');

	//Transaction Controller
	Route::get('transaction',[TransactionController::class,"index"])->name('transaction.index');
	Route::get('load_transaction',[TransactionController::class,"datatable"])->name('load_transaction');

	
});


/*
|--------------------------------------------------------------------------
| End Admin Routes
|--------------------------------------------------------------------------
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
