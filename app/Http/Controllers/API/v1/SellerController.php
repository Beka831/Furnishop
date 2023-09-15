<?php

namespace App\Http\Controllers\API\v1;

use Validator;
use Illuminate\Http\Request;
use App\Models\API\v1\Seller;
use Laravel\Passport\TokenGuard;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\API\BaseController as BaseController;


class SellerController extends BaseController
{

    //register
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:255',
            'seller_phone_no' => 'required|unique:sellers,seller_phone_no|max:25',
            'email' => 'required|email|unique:sellers,email|max:255',
            'password' => 'required|min:8|max:255',
            'c_password' => 'required|same:password',
            'tin_no' => 'required|unique:sellers,tin_no|max:255',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $validatedData = $request->all();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $seller = Seller::create($validatedData);
        $success['token'] = $seller->createToken('MyWebApp')->accessToken;
        $success['company_name'] = $seller->company_name;
        $success['seller_phone_no'] = $seller->seller_phone_no;
        $success['email'] = $seller->email;
        $success['password'] = $seller->password;
        $success['c_password'] = $seller->password;
        $success['tin_no'] = $seller->tin_no;
        if($success['password'] != $success['c_password']){
            return $this->sendError('Validation Error. must confirm password', $validator->errors());
        }
        return $this->sendResponse($success, 'Seller registered successfully.');
    }

    //login
    public function login(Request $request): JasonResponse
    {
        $credetials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            $seller = Auth::user();
            $success['token'] = $client->createToken('MyWebApp')->accessToken;
            $success['name'] = $seller->name;
            $success['seller_phone_no'] = $seller->seller_phone_no;
            $success['email'] = $seller->email;
            $success['password'] = $seller->password;
            $success['c_password'] = $seller->password;
            $success['tin_no'] = $seller->tin_no;
            return $this->sendResponse($success, 'Seller logged in successfully.');
        } else {
            $seller = Seller::where('email', $request->email)->first();

            if (!$seller) {
                return $this->sendError('Seller not found');
            }  
            if (!Hash::check($request->password, $seller->password)) {
                return $this->sendError('Password does not match');
            }
            return $this->sendError('Unauthorised.', ['error' => 'Email not found.']);
        }
    }
    //logout
    public function logout(Request $request): JsonResponse
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response()->json($response, 200);
        
    }
    //index
    public function index(): JsonResponse
    {
        $sellers = Seller::all();
        return $this->sendResponse($sellers->toArray(), 'Sellers retrieved successfully.');
    }
    //register
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'company_name' => 'required|max:255',
            'seller_phone_no' => 'required|unique:sellers,seller_phone_no|max:25',
            'email' => 'required|email|unique:sellers,email|max:255',
            'password' => 'required|min:8|max:255',
            'c_password' => 'required|same:password',
            'tin_no' => 'required|unique:sellers,tin_no|max:255',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $seller = Seller::create($input);
        return $this->sendResponse($seller->toArray(), 'Seller created successfully.');
    }
    //show
    public function show($seller_id): JsonResponse
    {
        $seller = Seller::find($seller_id);
        if (is_null($seller)) {
            return $this->sendError('Seller not found.');
        }
        return $this->sendResponse($seller->toArray(), 'Seller retrieved successfully.');
    }
    //update
    public function update(Request $request, $seller_id): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'company_name' => 'required|max:255',
            'seller_phone_no' => 'required|unique:sellers,seller_phone_no|max:25',
            'email' => 'required|email|unique:sellers,email|max:255',
            'password' => 'required|min:8|max:255',
            'c_password' => 'required|same:password',
            'tin_no' => 'required|unique:sellers,tin_no|max:255',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $seller = Seller::find($seller_id);
        if (is_null($seller)) {
            return $this->sendError('Seller not found.');
        }
        $seller->company_name = $input['company_name'];
        $seller->seller_phone_no = $input['seller_phone_no'];
        $seller->email = $input['email'];
        $seller->password = $input['password'];
        $seller->tin_no = $input['tin_no'];
        $seller->save();
        return $this->sendResponse($seller->toArray(), 'Seller updated successfully.');
    }
    //destroy
    public function destroy(Seller $seller): JsonResponse
    {
        $seller->delete();
        return $this->sendResponse($seller->toArray(), 'Seller deleted successfully.');
    }
}