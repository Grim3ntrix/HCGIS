<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Accessor
    public function getDownPaymentRateAttribute($value)
    {
        return $value . '%';
    }

    // Mutator
    public function setDownPaymentRateAttribute($value)
    {
        $this->attributes['down_payment_rate'] = rtrim($value, '%');
    }

    public function product(){
        return $this->hasOne(Product::class, 'down_payment_id');
    }
}
