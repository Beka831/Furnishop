<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagories;

class AdminController extends Controller
{
    public function view_catagory(){

        return view('admin.catagory');
    }
    public function add_catagory(Request $request){
        
        $data = new catagories;

        $data->catagories_title=$request->catagories;

        $data -> save();

        return redirect()->back()->with('message', 'Catagory Added successfully');
        
    }
}
