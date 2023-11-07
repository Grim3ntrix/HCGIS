<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function Product(){
        return $this->hasMany(Product::class, 'product_type_id');
    }
}
