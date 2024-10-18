<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanPayment;
use App\Http\Controllers\Api\BaseController;

class LoanPaymentController extends BaseController
{
    
    public function index()
    {
        $data=LoanPayment::with('customer','customer_account')->get();
        return $this->sendResponse($data,"Customer Account List");
    }

    public function store(Request $request)
    {
        $data=LoanPayment::create($request->all());
        return $this->sendResponse($data,"Loan payment create successfully");
    }

    public function show(LoanPayment $loan_payment)
    {
        return $this->sendResponse($loan_payment,"Loan payment Data");
    }

    public function update(Request $request,$id)
    {
        $customer_account=LoanPayment::where('id',$id)->update($request->all());
        return $this->sendResponse($loan_payment,"Loan payment updated successfully");

    }
    public function destroy(LoanPayment $loan_payment)
    {
        $loan_payment=$loan_payment->delete();
        return $this->sendResponse($loan_payment,"Loan payment deleted successfully");
    }
}
