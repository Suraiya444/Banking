<?php

namespace App\Http\Controllers\Api;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Api\BaseController;

class CustomerController extends BaseController
{
    public function index()
    {
        $data=Customer::with('bank','bank_branches')->get();
        return $this->sendResponse($data,"Customer List");
    }


    public function store(Request $request)
    {

        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/customer';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
        }
        $input['image']=implode(',',$files);
        /* /for files */



        $data=Customer::create($input);
        return $this->sendResponse($data,"Customer created successfully");
    }


    public function show (Customer $customer)
    {
        return $this->sendResponse($customer,"Customer data");
    }


    public function update(Request $request,Customer $customer)
    {

        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/cu';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
            $input['image']=implode(',',$files);
        }
        unset($input['files']);


        $id= $customer->id;
        $input =$request->all();
        unset($input['_method']);
        $data=Customer::where('id',$id)->update($input);
        return $this->sendResponse($data,"Customer updated successfully");
    }


    public function destroy(Customer $customer)
    {
        $customer=$customer->delete();
        return $this->sendResponse($customer,"Customer deleted successfully");
    }
    
}
