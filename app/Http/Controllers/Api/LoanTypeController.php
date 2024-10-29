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
        return $this->sendResponse($data,"Customer Type list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=LoanType::create($request->all());
        return $this->sendResponse($data,"Customer Type created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(LoanType $loan_type)
    {
        return $this->sendResponse($loan_type,"Customer Type data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,LoanType $loan_type)
    {
        $id= $loan_type->id;
        $input =$request->all();
        unset($input['_method']);
        $data=LoanType::where('id',$id)->update($input);
        return $this->sendResponse($data,"Customer Type updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoanType $loan_type)
    {
        $loan_type=$loan_type->delete();
        return $this->sendResponse($loan_type,"Customer Type deleted successfully");
    }
}
