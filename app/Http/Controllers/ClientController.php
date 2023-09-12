<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //show all clients
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
    //show a single client
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }
    
    public function store(Request $request)
    {
        //validate client data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:clients|max:255',
            'client_phone_no' => 'required|unique:clients|max:255',
            'password' => 'required|max:255',
        ]);

        //create a new client instance with the validate data
        $client = new Client($validatedData);

        //redirect to login page
        return redirect('/login');
    }

    //show form to edit an existing client
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    //update the specified client in the database
    public function update(Request $request, $id)
    {
        //find the client by its id
        $client = Client::findOrFail($id);

        //validate client data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:clients|max:255',
            'client_phone_no' => 'required|unique:clients|max:255',
            'password' => 'required|max:255',
        ]);

        //update the client
        Client::whereId($id)->update($validatedData);

        //redirect to the client's profile with a success message
        return redirect('/clients/'.$id)->with('success', 'Profile updated successfully');
    }

    //delete the specified client from the database
    public function destroy($id)
    {
        //find the client by its id
        $client = Client::findOrFail($id);

        //delete the client
        $client->delete();

        //redirect to the clients page with a success message
        return redirect('/clients')->with('success', 'Client deleted successfully');
    }

}
