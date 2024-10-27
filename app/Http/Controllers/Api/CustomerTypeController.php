<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerType; 
use App\Http\Controllers\Api\BaseController;



class CustomerTypeController extends BaseController
{
    
    public function index()
    {
        $data=CustomerType::with('customer','customer_account','account_type')->get();
        return $this->sendResponse($data,"Customer Type list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=CustomerType::create($request->all());
        return $this->sendResponse($data,"Customer Type created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerType $customer_type)
    {
        return $this->sendResponse($customer_type,"Customer Type data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,CustomerType $customer_type)
    {
        $id= $bank_branch->id;
        $input =$request->all();
        unset($input['_method']);
        $data=BankBranch::where('id',$id)->update($input);
        return $this->sendResponse($data,"Customer Type updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerType $customer_type)
    {
        $customer_type=$customer_type->delete();
        return $this->sendResponse($customer_type,"Customer Type deleted successfully");
    }
}
