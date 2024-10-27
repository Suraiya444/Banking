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
        $data=LoanPayment::with('customer','loan_id','customer_account')->get();
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

    public function update(Request $request, LoanPayment $id)
    {
        $id=$loan_payment->id;
        $input =$request->all();
        unset($input['_method']);
        $data=LoanPayment::where('id',$id)->update($input);
        return $this->sendResponse($data,"Account Type updated successfully");


    }
    public function destroy(LoanPayment $loan_payment)
    {
        $loan_payment=$loan_payment->delete();
        return $this->sendResponse($loan_payment,"Loan payment deleted successfully");
    }
}
