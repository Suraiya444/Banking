<?php

namespace App\Http\Controllers\Api;

use App\Models\CustomerService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class CustomerServicetController extends BaseController
{
    public function index()
    {
        $data=CustomerService::with('customer','bank_service')->get();
        return $this->sendResponse($data,"Customer service list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=CustomerService::create($request->all());
        return $this->sendResponse($data,"Customer Service created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerService $customer_service)
    {
        return $this->sendResponse($customer_service,"Customer Service data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer_service=CustomerService::where('id',$id)->update($request->all());
        return $this->sendResponse($customer_service,"Customer Service  updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerService $customer_service)
    {
        $customer_service=$customer_service->delete();
        return $this->sendResponse($customer_service,"Customer Service deleted successfully");
    }
}


