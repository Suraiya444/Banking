<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerTransaction;
use App\Http\Controllers\Api\BaseController;

class CustomerTransactionController extends BaseController
{
    public function index(Request $request)
    {
        $data=CustomerTransaction::with('customer','customer_account');
        if($request->customer_id){
            $data=$data->where('customer_id',$request->customer_id);
        }
        $data=$data->get();
        
        return $this->sendResponse($data,"Customer Transaction list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=CustomerTransaction::create($request->all());
        return $this->sendResponse($data,"Customer Transaction created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerTransaction $customer_transaction)
    {
        return $this->sendResponse($customer_transaction,"Customer Transaction data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,CustomerTransaction $bank_branch)
    {
        $id= $customer_transaction->id;
        $input =$request->all();
        unset($input['_method']);
        $data=CustomerTransaction::where('id',$id)->update($input);
        return $this->sendResponse($data,"Customer Transaction updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerTransaction $customer_transaction)
    {
        $customer_transaction=$customer_transaction->delete();
        return $this->sendResponse($bank_branch,"Customer Transaction deleted successfully");
    }
}
