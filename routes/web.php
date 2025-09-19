<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {return view('welcome');});

//login
Route::get('/login', function() {return view('login');})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');   

//logout
Route::post('logout', function() {
    Auth::guard('web')->logout();
    Session::invalidate();
    Session::regenerateToken();
    return redirect('/');
})->name('logout');

//middleware auth for home or index
Route::middleware('auth')->group(function (){
    Route::get('/home', function () {return view('home');})->name('home');
});
