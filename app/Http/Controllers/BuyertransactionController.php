<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\buyer_transaction;

use App\investment;

use Session;

use DB;

use Validator;



class BuyertransactionController extends Controller
{
    public function add_transaction(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'client_list'           => 'required|integer',
            'product_list'          => 'required|integer',
            'advance'          		=> 'required|integer',
                
        ]);

    	if ($validator->fails()) {
            return redirect('buyer_transaction')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $buyer_transaction          	      	= new buyer_transaction;
                $buyer_transaction->client_id        	= $request->client_list;
                $buyer_transaction->product_id        	= $request->product_list;
                $buyer_transaction->advance	        	= $request->advance;
                $buyer_transaction->status              = 0;
                $buyer_transaction->save();

                $total_invest               			= DB::table('investments')->sum('total_invest');
                $new_investment	 						= $request->advance + $total_invest;

                investment::where('id',5)->update(array(
                         'total_invest'=>$new_investment,
                ));


                Session::flash('buyer_transaction', 'Inserted Successfully!'); 
                return redirect('buyer_transaction');
            
        }
    }


}
