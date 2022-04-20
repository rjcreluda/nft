<?php

use App\Http\Controllers\Front\RegisterController;
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
    return view('front.app');
});
Route::get('/nft-revolution', function(){
    return view('front.revolution');
});
Route::post('/register', [ RegisterController::class, 'handleRegistration'] )->name('register');
