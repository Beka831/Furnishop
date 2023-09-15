<?php

namespace App\Models\API\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Seller extends Model
{
    use HasFactory, HasApiTokens;
    protected $primaryKey = 'seller_id';
    protected $fillable = [
        'company_name',
        'email',
        'password',
        'seller_phone_no',
        'tin_no',
    ];
}
