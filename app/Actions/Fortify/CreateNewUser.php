<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */

     public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']),
            'usertype' => 0,
        ]);
    }

    public function createSeller(Request $request): User
{
    $input = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => $this->passwordRules(),
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        'address' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'string', 'max:255'],
        'tin_no' => ['required', 'string', 'max:255'],
        'company_name' => ['required', 'string', 'max:255'],
        'company_address' => ['required', 'string', 'max:255'],
    ]);

    $user = User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'address' => $input['address'],
        'phone' => $input['phone'],
        'password' => Hash::make($input['password']),
    
    ]);

    $seller = new Seller();
    $seller->tin_no = $input['tin_no'];
    $seller->company_name = $input['company_name'];
    $seller->company_address = $input['company_address'];
    $seller->user_id = $user->id;

    $seller->save();

    $user->seller()->save($seller);

    //assign usertype
    if($user->seller()->save($seller)){
        $user->usertype = 2;
    }
    else{
        $user->usertype = 0;
    }

    Auth::login($user);

     function redirectToSellerHome(): RedirectResponse
    {
        return redirect('/seller/home')->with('success', 'Registration successful!');
    }
    return $user;
}

}