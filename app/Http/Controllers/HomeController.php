<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\catagories;
use App\Models\products;
use App\Models\cart;

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
        $catagory = catagories::all();
        $latest = products::all()->take(-5);

        $sofa = products::where('pro_catagory','sofa')->get();
        $lamp = products::where('pro_catagory','lamp')->get();
        $table = products::where('pro_catagory','table')->get();
        $bed = products::where('pro_catagory','bed')->get();
        $chair = products::where('pro_catagory','chair')->get();
         
        return view('home.product',compact('product','sofa','lamp','latest',
                    'table','bed','chair','catagory'));
    }

    public function product_detail($id){

        $product = products::find($id);

        return view('home.product_detail',compact('product'));
    }
    public function add_cart(Request $request,$id){

        if(Auth::id())
        {
           $user=Auth::user();
           $product=products::find($id);
           
           $cart = new cart;

           $cart->name=$user->name;
           $cart->email=$user->email;
           $cart->phone=$user->phone;
           $cart->address=$user->address;
           $cart->user_id=$user->id;

           $cart->pro_name=$product->pro_name;
           $cart->pro_price=$product->pro_price;
           $cart->pro_image=$product->pro_image;
           $cart->pro_id=$product->id;

           $cart->pro_quantity=$request->quantity;

           $cart->save();

           return redirect()->back()->with('message', 'Product added successfully to the cart');

        }
        else{
            return redirect('login');
        }
    }

        public function show_cart()
        {
            if(Auth::id())
            {

            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();


            return view('home.cart',compact('cart'));  
            }
            else
            {
                return redirect('login');
            }
        }
        public function delete_cart($id){

            $cart = cart::find($id);

            $cart -> delete();

            return redirect()->back()->with('message', 'Item Deleted Successfully.');
        }
        public function contact(){
            
            return view('home.contact');
        }
        public function about(){
            
            return view('home.about_us');
        }
    }

