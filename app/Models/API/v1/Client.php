<?php

namespace App\Models\API\v1;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;


class Client extends Model 
{
    use HasFactory, HasApiTokens;
    protected $primaryKey = 'client_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'client_phone_no',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
}

