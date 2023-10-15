<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ListPrice;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PricelistController extends Controller
{
    public function showPricelistWithDP(Request $request){
        
        if($request->ajax()){
            
            $ListPrice = ListPrice:: latest()->get();
            return DataTables::of($ListPrice)->addIndexColumn()->make(true);          
        }
        return view('admin.manager.content.index-add-pl-with-dp');
    }//End Manager Pricelist View

    public function showPricelistNoDP(){
        return view('admin.manager.content.index-add-pl-no-dp');
    }//End Manager Pricelist
    
    public function showCustomerPricelistWithDP(){
        return view('web_customer.verified_customer.body.show-pl-with-dp');
    }

    public function showCustomerPricelistNoDP(){
        return view('web_customer.verified_customer.body.show-pl-no-dp');
    }//End Customer Pricelist
}
