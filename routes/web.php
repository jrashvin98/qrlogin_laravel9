<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () 
{
    return view('welcome');
});

Auth::routes();
Route::get('/QrLogin', ['uses' => 'App\Http\Controllers\QrLoginController@index']);
Route::get('/QrLogin', ['uses' => 'App\Http\Controllers\QrLoginController@checkUser']);

Route::get('/QrLogin', [App\Http\Controllers\QrLoginController::class, 'index'])->name('QrLogin');
Route::post('/QrLogin', [App\Http\Controllers\QrLoginController::class, 'checkUser'])->name('QrLogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
