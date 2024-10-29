<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanType;

class LoanTypeController extends BaseController
{
    public function index()
    {
        $data=LoanType::get();
        return $this->sendResponse($data,"Loan Type List");
    }

    public function store(Request $request)
    {
        $data=LoanType::create($request->all());
        return $this->sendResponse($data,"Loan Type created successfully");
    }

    public function show(LoanType $loan_type)
    {
        return $this->sendResponse($loan_type,"Loan Type data");
    }


    
    public function update(Request $request,LoanType $loan_type)
    {
      
        $id=$loan_type->id;
        $input =$request->all();
        unset($input['_method']);
        $data=LoanType::where('id',$id)->update($input);
        return $this->sendResponse($data,"Loan Type updated successfully");

    }

    public function destroy(LoanType $loan_type)
    {
        $loan_type=$loan_type->delete();
        return $this->sendReponse($loan_type, "Loan Type deleted successfully");
    }
}
