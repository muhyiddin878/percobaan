<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->name('user.')->namespace('User')->group(function(){
  Route::get('/login', 'UserController@login')->name('login');
  Route::post('/login', 'UserController@authenticate')->name('login.submit');
  Route::post('/register', 'UserRegisterController@store')->name('register.submit');

});
