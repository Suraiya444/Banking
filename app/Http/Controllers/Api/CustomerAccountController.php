<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerAccount;
use App\Http\Controllers\Api\BaseController;

class CustomerAccountController extends BaseController
{
    public function index()
    {
        $data=CustomerAccount::with('customer','customer_account')->get();
        return $this->sendResponse($data,"Customer Account List");
    }

    public function store(Request $request)
    {
        $data=Bank::create($request->all());
        return $this->sendResponse($data,"Customer create successfully");
    }

    public function show(CustomerAccount $customer_account)
    {
        return $this->sendResponse($customer_account,"Customer  Account Data");
    }

    public function update(Request $request,$id)
    {
        $customer_account=CustomerAccount::where('id',$id)->update($request->all());
        return $this->sendResponse($customer_account,"Customer account updated successfully");

    }
    public function destroy(CustomerAccount $customer_account)
    {
        $customer_account=$customer_account->delete();
        return $this->sendResponse($customer_account,"Customer Account deleted successfully");
    }
}