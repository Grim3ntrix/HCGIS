<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntermentFee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function obituary(){
        return $this->belongsTo(Obituary::class, 'obituary_id');
    }
}
