<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function paymentMode(){
        return $this->hasOne(PaymentMode::class, 'payment_id');
    }

    public function tax(){
        return $this->hasOne(Tax::class, 'payment_id');
    }

    public function penalty(){
        return $this->hasOne(Penalty::class, 'payment_id');
    }

    public function officialReceipt(){
        return $this->hasOne(OfficialReceipt::class, 'payment_id');
    }

    public function paymentSchedule(){
        return $this->hasMany(PaymentSchedule::class, 'payment_id');
    }
}
