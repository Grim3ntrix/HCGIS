<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotController extends Controller
{
    public function SoldLots(){
        return view('web_customer.verified_customer.body.sold-lots');
    }
}
