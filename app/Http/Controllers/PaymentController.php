<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showCustomerPaymentRecord(){
        return view('admin.staff.content.index-show-payment-record');
    }

    public function showPaidCustomer(){
        return view('admin.staff.content.index-show-paid-customer');
    }
}
