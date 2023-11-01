<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function Products(){
        return $this->hasMany(Product::class, 'product_category_id');
    }
}
