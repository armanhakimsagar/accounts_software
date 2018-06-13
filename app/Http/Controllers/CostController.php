<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\investment;

use Session;

use App\cost;

use DB;


class CostController extends Controller
{
    public function post_cost(Request $request){

    	$validator = Validator::make($request->all(), [
                
            'cost'           => 'required | integer',
                
        ]);

    	if ($validator->fails()) {

            return redirect('investment')
                            ->withErrors($validator)
                            ->withInput();

            } else {


                	$cost                = new cost;
	                $cost->amount        = $request->cost;
	                $cost->save();

	                $total_cost = DB::table('costs')->sum('amount');

	                cost::where('id',5)->update(array(
	                         'total_cost'=>$total_cost,
	                ));


                Session::flash('cost', 'Inserted Successfully!'); 
                return redirect('investment');
            
        }

    }
}
