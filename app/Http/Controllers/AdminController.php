<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagories;

use App\Models\products;

class AdminController extends Controller
{
    public function view_catagory(){

        $data = catagories::all();

        return view('admin/new.catagory',compact('data'));
    }
    public function page_catagory(){
        $data = catagories::all();

        return view('admin/new.add_catagory',compact('data'));
    }
    public function page_product(){

        $pro_catagory = catagories::all();

        return view('admin/new.add_product',compact('pro_catagory'));
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

        return view('admin/.product', compact('pro_catagory'));
    }
    public function add_product(Request $request){

        $products = new products;

        $products->pro_name = $request->name;
        $products->pro_desc = $request->desc;
        $products->pro_quantity = $request->quantity;
        $products->pro_price = $request->price;
       
        $products->pro_catagory = $request->pro_catagory;
        $pro_name = $request->pro_catagory;
       
        $pro_image=$request->pro_image;

        $imagename=$pro_name.time().'.'.$pro_image->getClientOriginalExtension();

        $request->pro_image->move('products',$imagename);

        $products->pro_image=$imagename;

        $products->save();
       
        return redirect()->back()->with('message', 'Product Added successfully');
    }
    public function delete_product($id){

        $products = products::find($id);
        
        $products->delete();

        return redirect()->back()->with('message', 'Deleted successfully');
    }
    public function show_product(){

        $product = products::all();

        return view('admin/new.show_product', compact('product'));
    }
    public function edit_product($id){

        $product = products::find($id);
        
        $catagory = catagories::all();

        return view('admin/new.edit_product', compact('product','catagory'));
   }
   public function update_product(Request $request,$id){

        $product = products::find($id);

        $product->pro_name = $request->pname;
        $product->pro_catagory = $request->pcatagory;
        $product->pro_desc = $request->pdesc;
        $product->pro_quantity = $request->pquantity;
        $product->pro_price = $request->pprice;

        $image = $request->pimage;
        $pro_name = $request->pro_catagory; 
        $imagename=$pro_name.time().'.'.$image->getClientOriginalExtension();
        
        $request->image->move('products',$imagename);

        $product->pro_image = $imagename;

        $product->save();

        return redirect()->back();



   }
}
