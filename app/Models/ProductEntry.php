<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productListPrice(){
        return $this->belongsTo(ProductListPrice::class, 'product_list_price_id');
    }

    public function block(){
        return $this->hasOne(Block::class, 'product_entry_id');
    }

    public function order(){
        return $this->hasMany(Order::class, 'product_entry_id');
    }

    public function phase(){
        return $this->belongsTo(Phase::class, 'phase_id');
    }
}
