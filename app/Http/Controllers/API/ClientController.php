<?php

namespace App\Http\Controllers\API;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

//register client
    public function register(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:clients|max:255',
        'client_phone_no' => 'required|unique:clients|max:255',
        'password' => 'required|min:8|max:255|confirmed',
    ]);

    $client = Client::where('email', $validatedData['email'])->orWhere('client_phone_no', $validatedData['client_phone_no'])->first();
    if ($client) {
        return redirect('/login')->with('error', 'You are already registered, please login');
    }

    $client = new Client($validatedData);
    $client->name = $validatedData['name'];
    $client->email = $validatedData['email'];
    $client->password = $validatedData['password'];//encrypt password
    $client->client_phone_no = $validatedData['client_phone_no'];
    $client->save();

    return redirect('/login')->with('success', 'You are registered successfully, please login');
}

//login client
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        
        $client = Client::where('email', $validatedData['email'])->first();
        if(!$client){
            return redirect('/login')->with('error', 'You are not registered, please register');
        }

        if($client->email != $validatedData['email']){
            return redirect('/login')->with('error', 'Wrong email, please try again');
                if($client->password != $validatedData['password']){
                    return redirect('/login')->with('error', 'Wrong password, please try again');
                }
        }

        return redirect('/profile/'.$client->id);
    }

// logout client
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

//show all clients
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

//show a client by it's id
    public function show_profile($id)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

//show form to edit an existing client
    public function edit_profile($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

//update client data in the database by it's id
    public function update_profile(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:clients|max:255',
            'client_phone_no' => 'required|unique:clients|max:255',
            'password' => 'required|max:255',
        ]);
        Client::whereId($id)->update($validatedData);

        return redirect('/profile/'.$id)->with('success', 'Profile updated successfully');
    }

//change password form
    public function changePassword($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.change-password', compact('client'));
    }

//update client password
    public function updatePassword(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validatedData = $request->validate([
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        Client::whereId($id)->update($validatedData);

        return redirect('/profile/'.$id)->with('success', 'Password updated successfully');
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
