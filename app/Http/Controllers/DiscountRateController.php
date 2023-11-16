<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountRateController extends Controller
{
    public function showDiscountRate(Request $request){

        return view('admin.manager.content.index-show-discount-rate');
    }//End Show Manager Pricelist
}
