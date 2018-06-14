<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\seller_transaction;

use App\investment;

use Session;

use DB;

use Validator;

use App\seller;

use App\buyer;

use App\product;



class SellerTransactionController extends Controller
{

       public function index(){

        $products                   =   product::all();
        $sellers                    =   seller::all();
        $buyers                     =   buyer::all();
        
        return view('seller_transaction',compact('sellers','buyers','products'));

      }


       public function add_transaction(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'client_list'           => 'required',
            'product_list'          => 'required',
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

                $selling_price                              = DB::table('products')->where('chalan',$request->product_list)->sum('buy_rate');
                $qty                                        = DB::table('products')->where('chalan',$request->product_list)->sum('quantity');
                $qc_out                                     = DB::table('products')->where('chalan',$request->product_list)->sum('qc_out');

                $price = ($qty - $qc_out) * $selling_price ;

                $paid_by_seller                             = DB::table('seller_transactions')->where('product_id',$request->product_list)->sum('paid');


                if($price == $paid_by_seller){
                    seller_transaction::where('product_id',$request->product_list)->update(array(
                         'status'     =>1,
                    ));
                }
                

                Session::flash('seller_transaction', 'Inserted Successfully!'); 
                return redirect('seller_transaction');
            
        }
    }

    public function seller_all_details(){

        $seller_transactions = seller_transaction::orderBy('id', 'DESC')->get();
        return view('seller_all_details',compact('seller_transactions'));
    }


}
