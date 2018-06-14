<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\buyer_transaction;

use App\investment;

use Session;

use DB;

use Validator;

use App\seller;

use App\buyer;

use App\product;



class BuyertransactionController extends Controller
{

    public function index(){

        $sellers                    =   seller::all();
        $buyers                     =   buyer::all();
        $products                    =   product::all();
        
        return view('buyer_transaction',compact('sellers','buyers','products'));

    }

    public function add_transaction(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'client_list'           => 'required',
            'product_list'          => 'required',
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

                
                $buy_rate                                   = DB::table('products')->where('chalan',$request->product_list)->sum('seller_rate');
                $qty                                        = DB::table('products')->where('chalan',$request->product_list)->sum('quantity');
                $qc_out                                     = DB::table('products')->where('chalan',$request->product_list)->sum('qc_out');

                $price = ($qty - $qc_out) * $buy_rate ;



                $advance_by_buyer                           = DB::table('buyer_transactions')->where('product_id',$request->product_list)->sum('advance');


                if($price == $advance_by_buyer){
                    buyer_transaction::where('product_id',$request->product_list)->update(array(
                         'status'     =>1,
                    ));

                    $profit                     = DB::table('products')->where('chalan',$request->product_list)->sum('profit');
                    $invest                     = DB::table('investments')->sum('total_invest');

                    $new                        =  $profit + $invest;
                    
                    investment::where('id',5)->update(array(
                         'total_invest'         =>$new,
                    ));

                }


                Session::flash('buyer_transaction', 'Inserted Successfully!'); 
                return redirect('buyer_transaction');
            
        }
    }

    public function buyer_all_details(){

        $buyer_transactions = buyer_transaction::orderBy('id', 'DESC')->get();
        return view('buyer_all_details',compact('buyer_transactions'));
    }


}
