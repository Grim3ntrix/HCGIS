<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function productType(){
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function productCategory(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function listPrice(){
        return $this->belongsTo(ListPrice::class, 'list_price_id');
    }

    public function installmentPriceWithDownPayment(){
        return $this->hasMany(InstallmentPriceWithDownPayment::class, 'product_id');
    }

    public function installmentPriceNoDownPayment(){
        return $this->hasMany(InstallmentPriceNoDownPayment::class, 'product_id');
    }

    public function downPayment(){
        return $this->belongsTo(DownPayment::class, 'down_payment_id');
    }

    public function purchaseDetail(){
        return $this->hasMany(PurchaseDetail::class, 'product_id');
    }
}
