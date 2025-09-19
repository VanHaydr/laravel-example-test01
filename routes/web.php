<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('home');})->name('home');

//login
Route::get('/login', function() {return view('login');})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');    
