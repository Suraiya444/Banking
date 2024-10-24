<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BankController;
use App\Http\Controllers\Api\BankBranchController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DistrictController;
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
    
    Route::post('login','_login');
    Route::get('login','_login');
    Route::apiResource('district', DistrictController::class);
    Route::apiResource('bank', BankController::class);
    Route::apiResource('bank_branch', BankBranchController::class);
});

// Route::middleware('auth:sanctum')->group(function(){
//     Route::apiResource('bank', BankController::class);
//     Route::apiResource('district', DistrictController::class);
    // Route::apiResource('bank_branch', BankBranchController::class);
    // Route::apiResource('customer', CustomerController::class);
    // Route::apiResource('account_type', AccountTypeController::class);
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
