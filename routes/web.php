<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MPESAController;

Route::get('/', function () {
    return view('welcome');
});



Route::post('get-token', [MPESAController::class, 'getAccessToken']);
Route::post('register-urls', [MPESAController::class, 'registerURLS']);
Route::post('simulate', [MPESAController::class, 'simulateTransaction']);
Route::post('stkpush', [MPESAController::class, 'stkPush']);
Route::post('simulateb2c', [MPESAController::class, 'b2cRequest']);
Route::post('check-status', [MPESAController::class, 'transactionStatus']);
Route::post('reversal', [MPESAController::class, 'reverseTransaction']);


Route::get('stk', function () {
    return view('stk');
});

Route::get('b2c', function () {
    return view('b2c');
});
Route::get('transaction-status', function () {
    return view('status');
});
Route::get('reverse', function () {
    return view('reverse');
});
