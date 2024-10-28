<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment_detail;
use App\Http\Controllers\Api\BaseController;

class paymentDetailsController extends BaseController
{
    public function index()
    {
        $data=Payment_detail::with('customer','customer_account',)->get();
        return $this->sendResponse($data,"Payment detail List");
    }

    public function store(Request $request)
    {
        $data=Payment_detail::create($request->all());
        return $this->sendResponse($data,"Payment detail created successfully");
    }

    public function show(Payment_detail $payment_detail)
    {
        return $this->sendResponse($payment_detail,"Payment detail data");
    }


    
    public function update(Request $request,Payment_detail $id)
    {
        $id= $payment_detail->id;
        $input =$request->all();
        unset($input['_method']);
        $data=Payment_detail::where('id',$id)->update($input);
        return $this->sendResponse($data,"Payment detail updated successfully");
    }

    public function destroy(Payment_detail $payment_detail)
    {
        $payment_detail=$payment_detail->delete();
        return $this->sendReponse($payment_detail, "Payment detail deleted successfully");
    }
}
