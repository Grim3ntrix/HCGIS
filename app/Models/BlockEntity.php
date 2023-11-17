<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockEntity extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productEntry(){
        return $this->belongsTo(ProductEntry::class, 'product_entry_id');
    }
}
