<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transfer;
use App\Http\Controllers\Api\BaseController;

class TransferController extends BaseController
{
    public function index()
    {
        $data=Transfer::with('customer_id','customer_account','beneficiary_id')->get();
        return $this->sendResponse($data,"Transfer List");
    }

    public function store(Request $request)
    {
        $data=Transfer::create($request->all());
        return $this->sendResponse($data,"Transfer created successfully");
    }

    public function show(Transfer $transfer)
    {
        return $this->sendResponse($transfer,"Transfer data");
    }


    
    public function update(Request $request,Transfer $id)
    {
        $id= $transfer->id;
        $input =$request->all();
        unset($input['_method']);
        $data=Transfer::where('id',$id)->update($input);
        return $this->sendResponse($data,"Transfer updated successfully");
    }

    public function destroy(Transfer $transfer)
    {
        $transfer=$transfer->delete();
        return $this->sendReponse($transfer, "Transfer deleted successfully");
    }
}
