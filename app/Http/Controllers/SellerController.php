<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\seller;

use Session;

use DB;



class SellerController extends Controller
{
    public function add_seller(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'business_name'           => 'required',
                
        ]);

    	if ($validator->fails()) {
            return redirect('add_client')
                            ->withErrors($validator)
                            ->withInput();
            } else {
                
                $investment                	= new seller;
                $investment->name        	= $request->business_name;
                $investment->save();

                Session::flash('seller', 'Inserted Successfully!'); 
                return redirect('add_client');
            
        }
    }
}
