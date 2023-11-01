<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function productType(){
        return $this->belongsTo(productType::class, 'product_type_id');
    }

    public function productCategory(){
        return $this->belongsTo(productCategory::class, 'product_category_id');
    }

    public function listPrice(){
        return $this->hasOne(ListPrice::class, 'product_id');
    }
}
