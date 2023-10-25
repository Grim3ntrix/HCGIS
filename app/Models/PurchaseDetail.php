<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    //All the form field will be fillable
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
