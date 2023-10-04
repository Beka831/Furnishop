<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\catagories;
use App\Models\products;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
         
        if($usertype == '1'){
            return view('admin/new.homi');
        }
        else{
            return view('home.userpage');
        }
       
    }
   
    public function index(){

        $product = products::all();
   
        return view('home.userpage');
    }
    public function link(){

        $product = products::all();
        $latest = products::all()->take(-5);
        $sofa = products::where('pro_catagory','sofa')->get();
        $lamp = products::where('pro_catagory','lamp')->get();
        $table = products::where('pro_catagory','table')->get();
        $bed = products::where('pro_catagory','bed')->get();
        $chair = products::where('pro_catagory','chair')->get();
         
        return view('home.product',compact('product','sofa','lamp','latest','table','bed','chair'));
    }

    
    
}
