<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Seller;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
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

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);

        // $seller = Seller::create([
            
        //     'tin_no' => $input['tin_no'],
        //     'company_name' => $input['company_name'],
        //     'company_address' => $input['company_address'],
        // ]);
        $seller = new Seller();
        $seller->tin_no = $input['tin_no'];
        $seller->company_name = $input['company_name'];
        $seller->company_address = $input['company_address'];
        $seller->user_id = $user->id;

        $seller->save();
    
        $user->seller()->save($seller);
    
        return $user;


    }
}
