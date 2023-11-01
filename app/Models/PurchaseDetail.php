<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_information_id');
    }

    public function listPrice(){
        return $this->belongsTo(ListPrice::class, 'list_price_id');
    }

    public function installmentPrice(){
        return $this->belongsTo(InstallmentPrice::class, 'installment_price_id');
    }

    public function paymentSchedule(){
        return $this->hasMany(PaymentSchedule::class, 'purchase_detail_id');
    }
}
