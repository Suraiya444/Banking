<?php

namespace App\Http\Controllers\Api;
use App\Models\BankService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class BankServiceController extends BaseController
{
     
    public function index()
    {
        $data=BankService::get();
        return $this->sendResponse($data,"Bank Service list");
    }

    public function store(Request $request)
    {
        $data=BankService::create($request->all());
        return $this->sendResponse($data,"Bank Service created successfully");
    }

    public function show(BankService $bank_service)
    {
        return $this->sendResponse($bank_service,"Bank service data");
    }

    public function update(Request $request,BankService $bank_service)
    {
        $id= $bank_service->id;
        $input =$request->all();
        unset($input['_method']);
        $data=BankService::where('id',$id)->update($input);
        return $this->sendResponse($data,"Bank Serve updated successfully");
    }

    public function destroy(BankService $bank_service)
    {
        $bank_service=$bank_service->delete();
        return $this->sendResponse($bank_service,"Bank Serve deleted successfully");
    }

}
