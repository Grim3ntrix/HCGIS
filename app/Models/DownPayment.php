<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function listPrice(){
        return $this->belongsTo(ListPrice::class, 'list_price_id');
    }

    public function Installment(){
        return $this->hasMany(Installment::class, 'down_payment_id');
    }
}
