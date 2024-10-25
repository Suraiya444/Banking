<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountType; 
use App\Http\Controllers\Api\BaseController;

class AccountTypeController extends BaseController
{
    public function index()
    {
        $data=AccountType::get();
        return $this->sendResponse($data,"Account Type List");
    }

    public function store(Request $request)
    {
        $data=AccountType::create($request->all());
        return $this->sendResponse($data,"Account Type created successfully");
    }

    public function show(AccountType $account_type)
    {
        return $this->sendResponse($account_type,"Account Type data");
    }


    
    public function update(Request $request, $id)
    {
      
        $id= $account_type->id;
        $input =$request->all();
        unset($input['_method']);
        $data=AccountType::where('id',$id)->update($input);
        return $this->sendResponse($data,"Account Type updated successfully");

    }

    public function destroy(AccountType $account_type)
    {
        $account_type=$account_type->delete();
        return $this->sendReponse($account_type, "Account Type deleted successfully");
    }
    
}
