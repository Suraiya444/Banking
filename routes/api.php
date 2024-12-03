<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BankController;
use App\Http\Controllers\Api\BankBranchController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\AccountTypeController;
use App\Http\Controllers\Api\BankServiceController;
use App\Http\Controllers\Api\CustomerAccountController;
use App\Http\Controllers\Api\CustomerServicetController;
use App\Http\Controllers\Api\LoanTypeController;
use App\Http\Controllers\Api\CustomerTypeController;
use App\Http\Controllers\Api\LoanController;
use App\Http\Controllers\Api\LoanPaymentController;
use App\Http\Controllers\Api\CustomerTransactionController;
use App\Http\Controllers\Api\BeneficiaryController;
use App\Http\Controllers\Api\TransferController;
use App\Http\Controllers\Api\PaymentTypeController;
use App\Http\Controllers\Api\paymentDetailsController;
 
 
 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::controller(AuthController::class)->group(function(){
//     Route::post('register','_register');
//     Route::post('login','_login');
//     Route::get('login','_login');
// });
Route::controller(AuthController::class)->group(function(){
    Route::post('register','_register');
    Route::post('login','_login');
    Route::get('login','_login');
    Route::apiResource('district', DistrictController::class);
    Route::apiResource('bank', BankController::class);
    Route::apiResource('bank_branch', BankBranchController::class);
    Route::apiResource('account_type', AccountTypeController::class);
    Route::apiResource('bank_service', BankServiceController::class);
    // Route::apiResource('customer', CustomerController::class);
    Route::apiResource('customer_account', CustomerAccountController::class);
    Route::apiResource('customer_service', CustomerServicetController::class);
    Route::apiResource('loan_type', LoanTypeController::class);
    Route::apiResource('customer_type', CustomerTypeController::class);
    Route::apiResource('loan', LoanController::class);
    Route::apiResource('loan_payment', LoanPaymentController::class);
    Route::apiResource('customer_transaction', CustomerTransactionController::class);
    Route::apiResource('beneficiary', BeneficiaryController::class);
    Route::apiResource('transfer', TransferController::class);
    Route::apiResource('payment_type', PaymentTypeController::class);
    Route::apiResource('payment_detail', paymentDetailsController::class);
});
Route::controller(CustomerController::class)->group(function(){
    Route::get('customer','index');
    Route::get('customer/{customer}','show');
    Route::post('customer/edit/{customer}','update');
    Route::delete('customer/{customer}','destroy');
    Route::post('customer/create','store');
    Route::post('customer/login','login');
});
// Route::middleware('auth:sanctum')->group(function(){
//     Route::apiResource('bank', BankController::class);
//     Route::apiResource('district', DistrictController::class);
    // Route::apiResource('bank_branch', BankBranchController::class);
    // Route::apiResource('customer', CustomerController::class);
    // Route::apiResource('customer_account', CustomerAccountController::class);
    // Route::apiResource('customer_service', CustomerServicetController::class);
    // Route::apiResource('customer_transaction', CustomerTransactionController::class);
    // Route::apiResource('loan', LoanController::class);
    // Route::apiResource('loan_payment', LoanPaymentController::class);
     
// });

// Route::controller(DesignationController::class)->group(function(){
//     Route::get('designation','index');
//     Route::get('designation/{designation}','show');
//     Route::put('designation/{designation}','update');
//     Route::delete('designation/{designation}','destroy');
//     Route::post('designation/create','store');
// });
