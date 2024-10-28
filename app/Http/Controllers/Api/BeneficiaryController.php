<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiary; 
use App\Http\Controllers\Api\BaseController;

class BeneficiaryController extends BaseController
{
    public function index()
    {
        $data=Beneficiary::with('account_type')->get();
        return $this->sendResponse($data,"Beneficiary List");
    }

    public function store(Request $request)
    {
        $data=Beneficiary::create($request->all());
        return $this->sendResponse($data,"Beneficiary created successfully");
    }

    public function show(Beneficiary $beneficiary)
    {
        return $this->sendResponse($bank,"Beneficiary data");
    }


    
    public function update(Request $request,Beneficiary $id)
    {
        $id= $beneficiary->id;
        $input =$request->all();
        unset($input['_method']);
        $data=Beneficiary::where('id',$id)->update($input);
        return $this->sendResponse($data,"Beneficiary updated successfully");
    }

    public function destroy(Beneficiary $bank)
    {
        $beneficiary=$beneficiary->delete();
        return $this->sendReponse($beneficiary, "Beneficiary deleted successfully");
    }
}
