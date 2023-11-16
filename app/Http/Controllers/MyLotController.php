<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyLotController extends Controller
{
    public function showMyLot(){
        return view('web-customer.verified-customer.content.index-show-mylot');
    }
}
