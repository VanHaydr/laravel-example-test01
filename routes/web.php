<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', function () {return view('welcome');});

//register
Route::get('register', function() {return view('register');})->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.store');   


//login
Route::get('login', function() {return view('login');})->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.attempt');   

//logout
Route::post('logout', function() {
    Auth::guard('web')->logout();
    Session::invalidate();
    Session::regenerateToken();
    return redirect('/');
})->name('logout');

//middleware group auth for home
//preventing access to home without login
Route::middleware('auth')->group(function (){
    Route::get('home', function () {return view('home');})->name('home');
});
