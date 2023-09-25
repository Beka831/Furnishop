<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
         
        if($usertype == '1'){
            return view('admin.hom');
        }
        elseif($usertype == '2')
        {
            return view('seller.home');
        }
        else
        {
            return view('dashboard');
        }
    }
}
