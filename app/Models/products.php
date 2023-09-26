<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_name',
        'product_image',
        'product_price',
        'product_desc',
        'product_quantity',
        // 'category_id',
        'seller_id',
    ];
    
        public function carts(){
            return $this->belongsToMany(Cart::class);
        }
        public function sellers(){
            return $this->hasMany(Seller::class);
        }
        public function reviews(){
            return $this->hasMany(Review::class);
        }
        public function orders(){
            return $this->hasMany(Order::class);
        }
}
