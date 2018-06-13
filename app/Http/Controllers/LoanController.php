<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\loan;

use Session;

use DB;

use Validator;



class LoanController extends Controller
{
    public function load_add(Request $request){
    	$validator = Validator::make($request->all(), [
                
            'loan_amount'           => 'required | integer',
            'status'                => 'required | integer',
            'name'					=> 'required'
                
        ]);

    	if ($validator->fails()) {
            return redirect('investment')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $investment                = new loan;
                $investment->amount        = $request->loan_amount;
                $investment->name     	   = $request->name;
                $investment->status        = $request->status;
                $investment->save();

                $total_back = DB::table('loans')->where('status',1)->sum('amount');

                $total_give = DB::table('loans')->where('status',2)->sum('amount');

                $total_loan = $total_give - $total_back;

                loan::where('id',5)->update(array(
                         'total_loan'=>$total_loan,
                ));

                Session::flash('loan', 'Inserted Successfully!'); 
                return redirect('investment');
            
        }
    }
}
