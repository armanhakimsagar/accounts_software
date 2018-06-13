<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\buyer;

use Session;

use DB;


class BuyerController extends Controller
{
   public function add_buyer(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'buyer_business_name'           => 'required',
                
        ]);

    	if ($validator->fails()) {
            return redirect('add_client')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $investment                	= new buyer;
                $investment->name        	= $request->buyer_business_name;
                $investment->save();

                Session::flash('buyer', 'Inserted Successfully!'); 
                return redirect('add_client');
            
        }
    }
}
