<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\API\v1\Client;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\TokenGuard;

class ClientController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'client_phone_no' => 'required|unique:clients,client_phone_no|max:25',
            'email' => 'required|email|unique:clients,email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $validatedData = $request->all();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $client = Client::create($validatedData);
        $success['token'] = $client->createToken('MyWebApp')->accessToken;
        $success['name'] = $client->name;
        $success['client_phone_no'] = $client->client_phone_no;
        $success['email'] = $client->email;
        $success['password'] = $client->password;
        return $this->sendResponse($success, 'Client registered successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */


    public function login(Request $request): JsonResponse
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $client = Auth::user();
        $success['token'] = $client->createToken('MyWebApp')->accessToken;
        $success['name'] = $client->name;
        $success['client_phone_no'] = $client->client_phone_no;
        $success['email'] = $client->email;
        return $this->sendResponse($success, 'Client logged in successfully.');
    } else {
        $client = Client::where('email', $request->email)->first();
        
        if (!$client) {
            return $this->sendError('Unauthorised.', ['error' => 'Email not found.']);
        }
        
        return $this->sendError('Unauthorised.', ['error' => 'Incorrect password.']);
    }
}
    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    
     public function logout(Request $request): JsonResponse
     {
         $request->user('client')->token()->revoke();
 
         return response()->json(['message' => 'Client logged out successfully.']);
     }

    
    public function index(): JsonResponse
    {
        $clients = Client::all();
        return $this->sendResponse($clients->toArray(), 'Clients retrieved successfully.');
    }


    public function store(Request $request): JasonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'client_phone_no' => 'required|unique:clients,client_phone_no|max:25',
            'email' => 'required|email|unique:clients,email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input['password'] = bcrypt($input['password']);
        $client = Client::create($input);
        return $this->sendResponse($client->toArray(), 'Client created successfully.');
    }

    
    public function show($client_id): JsonResponse
    {
        $client = Client::find($client_id);
        if (is_null($client)) {
            return $this->sendError('Client not found.');
        }
        return $this->sendResponse($client->toArray(), 'Client retrieved successfully.');
    }


    public function update(Request $request, Client $client): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'client_phone_no' => 'required|unique:clients,client_phone_no|max:25',
            'email' => 'required|email|unique:clients,email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $client->name = $input['name'];
        $client->client_phone_no = $input['client_phone_no'];
        $client->email = $input['email'];
        $client->password = bcrypt($input['password']);
        $client->save();
        return $this->sendResponse($client->toArray(), 'Client updated successfully.');
    }


    public function destroy(Client $client): JsonResponse
    {
        $client->delete();
        return $this->sendResponse($client->toArray(), 'Client deleted successfully.');
    }

}
