<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productEntry(){
        return $this->belongsTo(ProductEntry::class, 'product_entry_id');
    }

    public function obituary(){
        return $this->hasMany(Obituary::class, 'order_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paymentSchedule(){
        return $this->hasMany(PaymentSchedule::class, 'order_id');
    }
    
}
