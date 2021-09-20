<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FastParityController;

Route::prefix('/admin')->name('admin.')->group(function(){

    //Login Routes
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login']);
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset',[ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email',[ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}',[ResetPasswordController::class,'showResetForm'])->name('password.reset');
    Route::post('/password/reset',[ResetPasswordController::class,'reset'])->name('password.update');

});

Auth::routes();

Route::prefix('/admin')->name('admin.')->middleware(['auth:admin'])->group(function(){

    //Dashboard
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

    //Users
    Route::resource('users', UserController::class);
    Route::get('/users/update-status/{user}',[UserController::class,'updateStatus'])->name('users.updateStatus');
    Route::post('/users/personal-information-update/{user}',[UserController::class,'personalInformationUpdate'])->name('users.personalInformationUpdate');

    //Fast-Parity
    Route::resource('/fast-parity',FastParityController::class);
});

