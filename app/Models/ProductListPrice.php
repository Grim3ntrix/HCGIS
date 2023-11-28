<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductListPrice extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* removed for decoupling purposes
    public function rate(){
        return $this->belongsTo(Rate::class, 'rate_id');
    } */
    
    public function downPayment(){
        return $this->hasOne(DownPayment::class, 'product_list_price_id');
    }
    
    public function preNeed(){
        return $this->hasOne(PreNeed::class, 'product_list_price_id');
    }

    public function atNeed(){
        return $this->hasOne(AtNeed::class, 'product_list_price_id');
    }

    public function withDownPayment(){
        return $this->hasMany(WithDownPayment::class, 'product_list_price_id');
    }
    
    public function noDownPayment(){
        return $this->hasMany(NoDownPayment::class, 'product_list_price_id');
    }

    public function withDownPaymentNoInterest(){
        return $this->hasMany(WithDownPaymentNoInterest::class, 'product_list_price_id');
    }

    public function noDownPaymentNoInterest(){
        return $this->hasMany(NoDownPaymentNoInterest::class, 'product_list_price_id');
    }

    public function productEntry(){
        return $this->hasMany(ProductEntry::class, 'product_list_price_id');
    }
}

