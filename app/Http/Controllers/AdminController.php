<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagories;

use App\Models\products;

class AdminController extends Controller
{
    public function view_catagory(){

        $data = catagories::all();

        return view('admin.catagory',compact('data'));
    }
    public function add_catagory(Request $request){
        
        $data = new catagories;

        $data->catagories_title=$request->catagories;

        $data -> save();

        return redirect()->back()->with('message', 'Catagory Added successfully');
        
    }
    public function delete_catagory($id){

        $data = catagories::find($id);
        
        $data->delete();

        return redirect()->back()->with('message', 'Deleted successfully');
    }
    public function view_product(){

        $pro_catagory = catagories::all();

        return view('admin.product', compact('pro_catagory'));
    }
    public function add_product(Request $request){

        $products = new products;

        $products->pro_name = $request->name;
        $products->pro_desc = $request->desc;
        $products->pro_quantity = $request->quantity;
        $products->pro_price = $request->price;
       
        $products->pro_catagory = $request->pro_catagory;

        $pro_image=$request->pro_image;

        $imagename=time().'.'.$pro_image->getClientOriginalExtension();

        $request->pro_image->move('products',$imagename);

        $products->pro_image=$imagename;

        $products->save();
        
        return redirect()->back()->with('message', 'Product Added successfully');
    }
    public function show_product(){

        $data = products::all();
        return view('admin.show_product', compact('data'));
    }
}
