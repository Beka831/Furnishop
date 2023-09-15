<?php

namespace App\Models\API\v1;

use App\Models\Product;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasApiTokens;
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_title',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
