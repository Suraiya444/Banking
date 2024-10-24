<?php
 
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank; 
use App\Http\Controllers\Api\BaseController;

class BankController extends BaseController
{
    public function index()
    {
        $data=Bank::get();
        return $this->sendResponse($data,"Bank List");
    }

    public function store(Request $request)
    {
        $data=Bank::create($request->all());
        return $this->sendResponse($data,"Bank created successfully");
    }

    public function show(Bank $bank)
    {
        return $this->sendResponse($bank,"Bank data");
    }


    
    public function update(Request $request, $id)
    {
        $bank=Bank::where('id',$id)->update($request->all());
        return $this->sendResponse($bank,"Bank updated successfully");
    }

    public function destroy(Bank $bank)
    {
        $bank=$bank->delete();
        return $this->sendReponse($bank, "Bank deleted successfully");
    }


}
