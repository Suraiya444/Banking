<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\LoanDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Carbon\Carbon;
class LoanController extends BaseController
{

    public function index()
    {
        $data=Loan::with('loan_type','customer','customer_account','customer_type')->get();
        return $this->sendResponse($data,"Loan List");
    }

    public function store(Request $request)
    {
        // Loan balance
        $balance = $request->principal_amount;
        // Loan interest rate
        $interestRate = $request->interest_rate/100;
        // Monthly interest rate
        $monthlyInterest = $interestRate / 12;
        // Term length of the loan, in years.
        $termLength = $request->term_length;
        // Number of payments per year.
        $paymentsPerYear = 12;
        // Payment iteration
        $paymentNumber = 1;
        // Determine total number payments
        $totalPayments = $termLength * $paymentsPerYear;
        // Determine interest component of periodic payment
        $intCalc = 1 + $interestRate / $paymentsPerYear;
        // Determine periodic payment
        $periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /
        (pow($intCalc,$totalPayments) - 1);
        $startDate=Carbon::createFromFormat('Y-m-d', $request->start_date);
        $startday=$startDate->format('Y').'-'.$startDate->format('m').'-01';
        // Round periodic payment to two decimals
        $periodicPayment = round($periodicPayment,2);
        $rows = $this->amortizationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest,$startday);

        $data=Loan::create($request->all());
        $totalint=0;
        if($rows){
            foreach($rows as $r){
                $totalint+=$r[2];
                $lddata['loan_id']=$data->id;
                $lddata['customer_account_id']=$data->customer_account_id;
                $lddata['payment_no']=$r[0];
                $lddata['loan_balance']=$r[1];
                $lddata['payment']=$r[2];
                $lddata['pricipal']=$r[3];
                $lddata['interest']=$r[4];
                $lddata['pay_date']=$r[5];
                LoanDetail::create($lddata);
            }
        }
        Loan::where('id',$data->id)->update(['amount_with_interest'=>$totalint]);
        return $this->sendResponse($data,"Loan create successfully");
    }

    public function show( $id)
    {
        $loan=Loan::with('loan_type','customer','customer_account','customer_type','loan_details')->where('id',$id)->first();
        return $this->sendResponse($loan,"Loan Data");
    }

    public function update(Request $request, $id)
    {
        $loan=Loan::where('id',$id)->update($request->all());
        return $this->sendResponse($loan,"Designation updated successfully");

    }
    public function destroy(Loan $loan)
    {
        $loan=$loan->delete();
        return $this->sendResponse($loan,"Loan deleted successfully");
    }

    public function amortizationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest,$startday){
        static $table = array();
        // Calculate payment interest
        $paymentInterest = round($balance * $monthlyInterest, 2);
        // Calculate payment principal
        $paymentPrincipal = round($periodicPayment - $paymentInterest, 2);
        // Deduct principal from remaining balance
        $newBalance = round($balance - $paymentPrincipal, 2);
        // If new balance < monthly payment, set to zero
        if ($newBalance < $paymentPrincipal) {
            $newBalance = 0;
        }
        $table[] = [$paymentNumber,
        $newBalance,
        $periodicPayment,
        $paymentPrincipal,
        $paymentInterest,
        $startday
        ];
        // If balance not yet zero, recursively call amortizationTable()
        if ($newBalance > 0) {
            $paymentNumber++;
            $startday=Carbon::createFromFormat('Y-m-d', $startday)->addMonth()->format('Y-m-d');
            $this->amortizationTable($paymentNumber, $periodicPayment,
            $newBalance, $monthlyInterest,$startday);
        }
        return $table;
    }

}
