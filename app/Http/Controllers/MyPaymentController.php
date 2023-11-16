<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPaymentController extends Controller
{
    public function showMyPayment(){
        return view('web-customer.verified-customer.content.index-show-mypayment');
    }
}
