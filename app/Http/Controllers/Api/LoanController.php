<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class LoanController extends BaseController
{
    
    public function index()
    {
        $data=Loan::with('loan_type','customer','customer_account','customer_type')->get();
        return $this->sendResponse($data,"Loan List");
    }

    public function store(Request $request)
    {
        $data=Loan::create($request->all());
        return $this->sendResponse($data,"Loan create successfully");
    }

    public function show(Loan $loan)
    {
        return $this->sendResponse($loan,"Loan Data");
    }
    public function update(Request $request,Loan $loan)
    {
      
        $id=$loan->id;
        $input =$request->all();
        unset($input['_method']);
        $data=Loan::where('id',$id)->update($input);
        return $this->sendResponse($data,"Loan updated successfully");

    }
    public function destroy(Loan $loan)
    {
        $loan=$loan->delete();
        return $this->sendResponse($loan,"Loan deleted successfully");
    }
}
