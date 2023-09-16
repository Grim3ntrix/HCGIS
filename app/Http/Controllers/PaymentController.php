<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function PaymentRecord(){
        return view('admin.staff.body.add-payment');
    }

    public function PaidCustomer(){
        return view('admin.staff.body.paid-customer');
    }
}
