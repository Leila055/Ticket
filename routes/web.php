<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/','home')->name('app_home');
    Route::get('/about','about')->name('app_about');
    Route::match(['get','post'],'/dashboard','dashboard')->middleware('auth')->name('app_dashboard');
});

Route::controller(LoginController::class)->group(function (){
    Route::get('/logout','logout')->name('app_logout');
    Route::get('/logout','logout')->name('app_logout');
    Route::post('/exist_email','existEmail')->name('app_exist_email');
    Route::match(['get','post'],'/activation_code/{token}','activationcode')->name('app_activation_code');
    Route::get('/user_checker','userChecker')->name('app_user_checker');
    Route::get('/resend_activation_code/{token}','resendActivationCode')->name('app_resend_activation_code');
    Route::get('/activation_account_link/{token}','ActivationAccountLink')->name('app_activation_account_link');
    Route::match(['get','post'],'/activation_account_change_email/{token}','ActivationAccountChangeEmail')->name('app_activation_account_change_email');
    Route::match(['get','post'],'/forgot_pasword','ForgotPassword')->name('app_forgotpasword');
    Route::match(['get','post'],'/change_password/{token}','changepassword')->name('app_changepassword');
});







