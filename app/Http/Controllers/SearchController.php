<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\loan;

use App\product;

use App\buyer_transaction;

use App\seller_transaction;

use App\cost;

use Session;

use DB;

use Validator;





class SearchController extends Controller
{
    public function search(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'to'           => 'required',
            'from'         => 'required'
                
        ]);

    	if ($validator->fails()) {
            return redirect('search')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $from 		= $request->from;
                $to		 	= $request->to;
            	
            	$profit 	= product::whereBetween('buying_date', [$from, $to])->sum('profit');
            	$advance 	= buyer_transaction::whereBetween('created_at', [$from, $to])->sum('advance');
            	$paid	 	= seller_transaction::whereBetween('created_at', [$from, $to])->sum('paid');
            	$cost 		= cost::whereBetween('created_at', [$from, $to])->sum('total_cost');

                return view('search',compact('profit','advance','paid','cost'));
            
        }

    }
}
