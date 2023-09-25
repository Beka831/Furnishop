<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function add_seller(Request $request){                    
            $user = new User();
            $user->company_email=$request->company_email;
            $user->password=$request->password;
            $user->company_phone=$request->company_phone;
            $user->rememberToken();

            $user->save();
            
            $seller = new Seller();
            $seller->user_id=$user->id;
            $seller->company_name=$request->company_name;
            $seller->company_address=$request->company_address;
            $seller->tin_number=$request->tin_number;
            
            $user->seller()->save($seller);
            
    
            return redirect()->back()->with('message', 'Seller Added successfully');
            
    }
}
