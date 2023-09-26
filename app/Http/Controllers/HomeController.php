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
            return view('admin/new.homi');
        }
        elseif($usertype == '2'){
            return view('seller.hom');
        }
        else{
            return view('dashboard');
        }
    }
}
