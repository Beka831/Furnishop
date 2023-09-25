<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public function sellerUser(){
         $fillable = [
            'user_id',
            'tin_no',
            'company_name',
            'company_address',
            
            'name',
            'email',
            'phone',
            'address',
            'password',
        ];
        return $this->belongsTo(User::class, 'user_id','id');
    }

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
}
