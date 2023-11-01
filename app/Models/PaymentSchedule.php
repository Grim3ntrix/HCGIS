<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSchedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function purchaseDetail(){
        return $this->belongsTo(PurchaseDetail::class, 'purchase_detail_id');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }
}
