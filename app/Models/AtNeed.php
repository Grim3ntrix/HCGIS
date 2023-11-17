<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtNeed extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productListPrice(){
        return $this->belongsTo(ProductListPrice::class, 'product_list_price_id');
    }
}
