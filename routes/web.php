<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\RecyclableController;
use App\Http\Controllers\PickupController;

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
Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login');
    Route::post('/login', 'processLogin');
    Route::get('/register', 'register');
    Route::post('/register', 'processRegistration');
});

Route::controller(PaymentsController::class)->group(function(){
    Route::get('/payments', 'index');
    Route::post('/payments', 'pay');
    Route::get('/success', 'success');
    Route::get('/error', 'errorOccured');
    Route::get('/cancelPayment', 'cancelPayment');
    Route::get('/paymentSuccess', 'paymentSuccess');
    Route::get('/myTransactions', 'myTransactions');
    Route::get('/viewAllPayments', 'viewAllPayments');
});
Route::controller(RecyclableController::class)->group(function(){
    Route::get('/recyclable', 'index');
    Route::post('/recyclable', 'store');
     Route::get('/displayWasteProducts', 'displayWasteProducts');
    Route::get('/viewRecyclable', 'viewRecyclable');
});
Route::controller(PickupController::class)->group(function(){
    Route::get('/schedulePickup', 'index');
    Route::post('/schedulePickup', 'store');
    Route::get('/viewPickupTimes', 'viewPickupTimes');
});

