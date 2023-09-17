<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function AddPricelistWithDP(){
        return view('admin.manager.body.add-pl-with-dp');
    }

    public function AddPricelistNoDP(){
        return view('admin.manager.body.add-pl-no-dp');
    }//End Manager Pricelist
    
    public function ShowPricelistWithDP(){
        return view('web_customer.verified_customer.body.show-pl-with-dp');
    }

    public function ShowPricelistNoDP(){
        return view('web_customer.verified_customer.body.show-pl-no-dp');
    }//End Customer Pricelist
}
