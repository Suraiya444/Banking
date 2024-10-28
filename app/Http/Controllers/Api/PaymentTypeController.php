<?php

namespace App\Http\Controllers\Api;
use App\Models\Payment_type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class PaymentTypeController extends BaseController
{
    public function index()
    {
        $data=Payment_type::get();
        return $this->sendResponse($data,"payment type List");
    }

    public function store(Request $request)
    {
        $data=Payment_type::create($request->all());
        return $this->sendResponse($data,"payment type created successfully");
    }

    public function show(Payment_type $payment_type)
    {
        return $this->sendResponse($payment_type,"payment type data");
    }


    
    public function update(Request $request,Payment_type $id)
    {
        $id= $payment_type->id;
        $input =$request->all();
        unset($input['_method']);
        $data=Payment_type::where('id',$id)->update($input);
        return $this->sendResponse($data,"payment type updated successfully");
    }

    public function destroy(Payment_type $bank)
    {
        $payment_type=$payment_type->delete();
        return $this->sendReponse($payment_type, "payment type deleted successfully");
    }
}
