<?php

namespace App\Http\Controllers\Api;
use App\Models\District;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;

class DistrictController extends BaseController
{
    public function index()
    {
        $data=District::get();
        return $this->sendResponse($data,"District list");
    }

    public function store(Request $request)
    {
        $data=District::create($request->all());
        return $this->sendResponse($data,"District created successfully");
    }

    public function show(District $district)
    {
        return $this->sendResponse($district,"District data");
    }

    public function update(Request $request, District $district)
    {
        $id= $district->id;
        $input =$request->all();
        unset($input['_method']);
        $data=District::where('id',$id)->update($input);
        return $this->sendResponse($data,"District updated successfully");
    }
    // 1?_method=PUT
 

    public function destroy(District $district)
    {
        $district=$district->delete();
        return $this->sendResponse($district,"District deleted successfully");
    }
}
