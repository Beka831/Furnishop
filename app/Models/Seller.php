<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'email',
        'password',
        'seller_phone_no',
        'tin_no',
    ];
}
