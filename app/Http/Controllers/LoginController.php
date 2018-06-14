<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registration;
use Session;

class LoginController extends Controller
{
    public function login_match(Request $request) {
        
        $password = md5($request->pass);
        $super_admin = registration::where('name', $request->email)
                ->where('passwords', $password)
                ->get();
        if (count($super_admin) == 1) {
            session(['SuperAdmin' => 'SuperAdmin']);
            return redirect('add_product');
        } else {
            $request->session()->flash('login_error', 'User name or password not match');
            return redirect('/');
        }
    }

    public function Logout(){
        Session::forget('SuperAdmin');
        Session::flush();
        return redirect('/');
    }
}
