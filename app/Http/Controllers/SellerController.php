<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    //show all sellers
    public function index()
    {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }
    //show a single seller
    public function show($id)
    {
        $seller = Seller::findOrFail($id);
        return view('sellers.show', compact('seller'));
    }
    
    public function store (Request $request)
    {
        //validate seller data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:sellers|max:255',
            'seller_phone_no' => 'required|unique:sellers|max:255',
            'password' => 'required|max:255',
        ]);

        //create a new seller instance with the validate data
        $seller = new Seller($validatedData);

        //redirect to login page
        return redirect('/login');
    }

    //show form to edit an existing seller
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        return view('sellers.edit', compact('seller'));
    }

    //update the specified seller in the database
    public function update(Request $request, $id)
    {
        //find the seller by its id
        $seller = Seller::findOrFail($id);

        //validate seller data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:sellers|max:255',
            'seller_phone_no' => 'required|unique:sellers|max:255',
            'password' => 'required|max:255',
        ]);

        //update the seller
        Seller::whereId($id)->update($validatedData);

        //redirect to the seller's profile with a success message
        return redirect('/sellers/'.$id)->with('success', 'Profile updated successfully');
    }
    
    //delete the specified seller from the database
    public function destroy($id)
    {
        //find the seller by its id
        $seller = Seller::findOrFail($id);

        //delete the seller
        $seller->delete();

        //redirect to the sellers page with a success message
        return redirect('/sellers')->with('success', 'Seller deleted successfully');
    }

}
