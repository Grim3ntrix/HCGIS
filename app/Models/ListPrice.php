<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPrice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function downPayment(){
        return $this->hasOne(DownPayment::class, 'list_price_id');
    }

    public function installmentPrice(){
        return $this->hasmany(InstallmentPrice::class, 'list_price_id');
    }

    public function purchaseDetail(){
        return $this->hasmany(PurchaseDetail::class, 'list_price_id');
    }
}
