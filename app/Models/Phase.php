<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productEntry(){
        return $this->hasMany(ProductEntry::class, 'phase_id');
    }
}
