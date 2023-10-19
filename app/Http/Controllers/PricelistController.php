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
            
            $ListPrice = ListPrice::latest()->get();
            return DataTables::of($ListPrice)->addIndexColumn()->make(true);          
        }
        return view('admin.manager.content.index-show-pl-with-dp');
    }//End Manager Pricelist View

    public function addPricelistWithDP(Request $request){
        
        return view('admin.manager.content.index-add-pl-with-dp');
    }//End Manager Pricelist Add

    public function storePricelistWithDP(Request $request){
        
        $request->validate([
            'product_type_id' => 'nullable',
            'product_category_id' => 'nullable',
            'pre_need_price_spot_cash' => 'required',
            'pre_need_price_contract_price' => 'required',
            'at_need_price' => 'required',
            'down_payment' => 'required',
            'balance' => 'required',

        ]);

        $user = Auth::user();

        ListPrice::insert([

            'product_type_id' => $request->product_type_id,
            'product_category_id' => $request->product_type_id,
            'pre_need_price_spot_cash' => $request->product_type_id,
            'pre_need_price_contract_price' => $request->product_type_id,
            'at_need_price' => $request->product_type_id,
            'down_payment' => $request->product_type_id,
            'balance' => $request->product_type_id,
            'created_by' => $request->created_by = $user->id,
            'updated_by' => $request->updated_by = $user->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $notification = array(
            'message' => 'List Price Added Successfully!',
            'alert-type' => 'success',
        );

        return redirect()->route('show.pricelist.withdown')->with($notification);
        
    }//End Manager Pricelist Store

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
