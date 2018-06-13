<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\seller_transaction;

use App\investment;

use Session;

use DB;

use Validator;




class SellerTransactionController extends Controller
{
       public function add_transaction(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'client_list'           => 'required|integer',
            'product_list'          => 'required|integer',
            'paid'          		=> 'required|integer',
                
        ]);

    	if ($validator->fails()) {
            return redirect('seller_transaction')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $seller_transaction          	      		= new seller_transaction;
                $seller_transaction->client_id        		= $request->client_list;
                $seller_transaction->product_id        		= $request->product_list;
                $seller_transaction->status                 = 0;
                $seller_transaction->paid	        		= $request->paid;
                $seller_transaction->save();

                $total_invest               			= DB::table('investments')->sum('total_invest');
                $new_investment	 						= $total_invest - $request->paid;

                investment::where('id',5)->update(array(
                         'total_invest'=>$new_investment,
                ));


                Session::flash('seller_transaction', 'Inserted Successfully!'); 
                return redirect('seller_transaction');
            
        }
    }
}
