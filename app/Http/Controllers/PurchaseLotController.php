<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseLotController extends Controller
{
    public function PurchaseLot(){
        return view('admin.staff.body.purchase-lot');
    }
}
