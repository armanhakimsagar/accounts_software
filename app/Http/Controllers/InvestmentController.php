<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\investment;

use Session;

use DB;



class InvestmentController extends Controller
{

    public function index(){

        $invest = DB::table('investments')->sum('total_invest');
        $buyer = DB::table('buyer_transactions')->where('status',0)->sum('advance');
        $seller = DB::table('seller_transactions')->where('status',0)->sum('paid');
        $loan = DB::table('loans')->sum('total_loan');
        $cost = DB::table('costs')->sum('total_cost');

        $liquid_cash = $invest - $cost - $loan;

        return view('investment',compact('invest','loan','cost','liquid_cash','buyer','seller'));

    }

    public function post_investment(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'investment'           => 'required | integer',
                
        ]);

    	if ($validator->fails()) {
            return redirect('investment')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $investment                = new investment;
                $investment->amount        = $request->investment;
                $investment->save();

                $total_invest               = DB::table('investments')->sum('amount');
                $profit                     = DB::table('products')->sum('profit');

                $new_investment = $profit + $total_invest;

                investment::where('id',5)->update(array(
                         'total_invest'=>$new_investment,
                ));



                

                Session::flash('investment', 'Inserted Successfully!'); 
                return redirect('investment');
            
        }

    }
}
