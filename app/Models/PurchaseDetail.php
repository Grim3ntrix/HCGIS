<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_information_id');
    }

    public function paymentSchedule(){
        return $this->hasMany(PaymentSchedule::class, 'purchase_detail_id');
    }
}
