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
        $data=CustomerAccount::with('customer','account_type')->get();
        return $this->sendResponse($data,"Customer Account List");
    }

    public function store(Request $request)
    {
        $data=CustomerAccount::create($request->all());
        return $this->sendResponse($data,"Customer Account created successfully");
    }

    public function show(CustomerAccount $customer_account)
    {
        return $this->sendResponse($customer_account,"Customer  Account Data");
    }

    public function update(Request $request,CustomerAccount $id)
    {
        $id= $customer_account->id;
        $input =$request->all();
        unset($input['_method']);
        $data=CustomerAccount::where('id',$id)->update($input);
        return $this->sendResponse($data,"Customer Account updated successfully");

    }
    public function destroy(CustomerAccount $customer_account)
    {
        $customer_account=$customer_account->delete();
        return $this->sendResponse($customer_account,"Customer Account deleted successfully");
    }
}