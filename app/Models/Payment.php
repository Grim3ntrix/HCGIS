<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paymentSchedule(){
        return $this->belongsTo(PaymentSchedule::class, 'payment_schedule_id');
    }

    public function status(){
        return $this->hasOne(Status::class, 'payment_id');
    }

    public function paymentMode(){
        return $this->hasOne(paymentMode::class, 'payment_id');
    }

    public function officialReceipt(){
        return $this->hasOne(OfficialReceipt::class, 'payment_id');
    }

    public function penalty(){
        return $this->hasOne(Penalty::class, 'payment_id');
    }

    public function tax(){
        return $this->hasOne(Tax::class, 'payment_id');
    }

    public function discount(){
        return $this->hasOne(Discount::class, 'payment_id');
    }
}
