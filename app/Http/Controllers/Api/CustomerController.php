<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Api\BaseController;

class CustomerController extends BaseController
{
    public function index()
    {
        $data=Customer::get();
        return $this->sendResponse($data,"Customer List");
    }
    public function store(Request $request)
    {
        $data=Customer::create($request->all());
        return $this->sendResponse($data,"Customer create successfully");
    }
    public function show (Customer $customer)
    {
        return $this->sendResponse($customer,"Customer data");
    }
    public function update(Request $request, $id)
    {
        $customer=Customer::where('id',$id)->update
        ($request->all());
        return $this->sendResponse($customer,"Customer updated successfully");
    }
    public function destroy(Customer $customer)
    {
        $customer=$customer->delete();
        return $this->sendResponse($customer,"Customer deleted successfully");
    }
    
}
