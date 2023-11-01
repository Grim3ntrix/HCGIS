<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallmentPrice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function downPayment(){
        return $this->belongsTo(DownPayment::class, 'down_payment_id');
    }

    public function listPrice(){
        return $this->belongsTo(ListPrice::class, 'list_price_id');
    }

    public function purchaseDetail(){
        return $this->hasOne(PurchaseDetail::class, 'installment_price_id');
    }
}
