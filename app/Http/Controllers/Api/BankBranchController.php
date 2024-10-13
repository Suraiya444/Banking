<?php

namespace App\Http\Controllers\Api;

use App\Models\BankBranch;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class BankBranchController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=BankBranch::with('bank')->get();
        return $this->sendResponse($data,"Bank Branch list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=BankBranch::create($request->all());
        return $this->sendResponse($data,"BankBranch created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(BankBranch $bank_branch)
    {
        return $this->sendResponse($bank_branch,"BankBranch data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bank_branch=BankBranch::where('id',$id)->update($request->all());
        return $this->sendResponse($bank_branch,"BankBranch updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BankBranch $bank_branch)
    {
        $bank_branch=$bank_branch->delete();
        return $this->sendResponse($bank_branch,"BankBranch deleted successfully");
    }
}
