<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

use App\investment;

use Session;

use DB;

use Validator;


class ProductsController extends Controller
{
    public function add_product(Request $request){


    	$validator = Validator::make($request->all(), [
                
            'date'           			=> 'required',
            'chalan'					=> 'required|integer',
            'product_name'				=> 'required',
            'quantity'					=> 'required|integer',
            'buy_rate'					=> 'required|integer',
            'product_buyer'				=> 'required|integer',
            'product_seller'			=> 'required|integer',
            'sale_rate'					=> 'required|integer',
            'qc_out'					=> 'required|integer',
                
        ]);

    	if ($validator->fails()) {
            return redirect('add_product')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $product                	 	= new product;
                $product->buying_date        	= $request->date;
                $product->chalan        		= $request->chalan;
                $product->product_name        	= $request->product_name;
                $product->quantity        		= $request->quantity;
                $product->buy_rate        		= $request->buy_rate;
                $product->product_buyer        	= $request->product_buyer;
                $product->product_seller        = $request->product_seller;
                $product->seller_rate        	= $request->sale_rate;
                $product->qc_out        		= $request->qc_out;

                $qty 							= $request->quantity - $request->qc_out;

                $sale_rate 						= $qty * $request->sale_rate ; 
                $buy_rate						= $qty * $request->buy_rate;
                $profit 						= $sale_rate - $buy_rate;
                $product->profit        		= $profit;

                $product->save();


                $total_invest = DB::table('investments')->sum('total_invest');
                $new_investment = $profit + $total_invest;
                investment::where('id',5)->update(array(

                    'total_invest'      =>      $new_investment,

                ));

                
                Session::flash('product', 'Inserted Successfully!'); 
                return redirect('add_product');
            
        }


    }

    public function product_list(){

    	$products = product::all();
    	return view('product_list',compact('products'));

    }



}
