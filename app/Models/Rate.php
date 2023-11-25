<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    /* removed for decoupling purposes
    public function productListPrice(){
        return $this->hasOne(ProductListPrice::class, 'rate_id');
    } */
}
