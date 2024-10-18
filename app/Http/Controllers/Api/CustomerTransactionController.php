<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerTransaction; 
use App\Http\Controllers\Api\BaseController;

class CustomerAccountController extends BaseController
{
    public function index()
    {
        $data=CustomerTransaction::get();
        return $this->sendResponse($data,"Customer Transaction List");
    }

    public function store(Request $request)
    {
        $data=CustomerTransaction::create($request->all());
        return $this->sendResponse($data,"Customer Transaction create successfully");
    }

    public function show(CustomerTransaction $customer_transaction)
    {
        return $this->sendResponse($customer_transaction,"Customer  Transaction Data");
    }

    public function update(Request $request,$id)
    {
        $customer_transaction=CustomerTransaction::where('id',$id)->update($request->all());
        return $this->sendResponse($customer_transaction,"Customer Transaction updated successfully");

    }
    public function destroy(CustomerTransaction $customer_transaction)
    {
        $customer_transaction=$customer_transaction->delete();
        return $this->sendResponse($customer_transaction,"Customer Transaction deleted successfully");
    }

}
