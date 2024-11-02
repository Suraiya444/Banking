<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerAccount;
use App\Http\Controllers\Api\BaseController;

class CustomerAccountController extends BaseController
{
    public function index(Request $r)
    {
        $data=CustomerAccount::with('customer','account_type');
        if($r->customer_id){
            $data=$data->where('customer_id',$r->customer_id);
        }
        $data=$data->get();
        return $this->sendResponse($data,"Customer Account List");
    }

    public function store(Request $request)
    {
        $input=$request->all();
        $input['account_no']=$input['account_type_id'] . str_pad(CustomerAccount::where('account_type_id',$input['account_type_id'])->latest()->first()?->id + 1 ?? 1,10,"0",STR_PAD_LEFT);
        $data=CustomerAccount::create($input);
        return $this->sendResponse($data,"Customer Account created successfully");
    }

    public function show(CustomerAccount $customer_account)
    {
        return $this->sendResponse($customer_account,"Customer  Account Data");
    }

    public function update(Request $request,$id)
    {
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
