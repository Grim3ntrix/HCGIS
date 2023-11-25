<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Product;
use App\Models\Rate;
use App\Models\ProductListPrice;
use App\Models\PreNeed;
use App\Models\AtNeed;
use App\Models\DownPayment;
use App\Models\WithDownPayment;
use App\Models\NoDownPayment;
use App\Models\WithDownPaymentNoInterest;
use App\Models\NoDownPaymentNoInterest;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ListPriceController extends Controller
{

    public function showallManagerListPrice(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        if($request->ajax()){
            
            $allListPrice = ProductListPrice::all();
            return DataTables::of($allListPrice)->addIndexColumn()->make(true);          
        }
        return view('admin.manager.content.index-show-all-list-price', compact('profileData'));
    }//End Show All Manager Pricelist

    public function showManagerListPrice(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $rate1 = Rate::find(1);
        $rate2 = Rate::find(2);
        $rate3 = Rate::find(3);
        $rate4 = Rate::find(4);
        $rate5 = Rate::find(5);
        $rate6 = Rate::find(6);
        $rate7 = Rate::find(7);
        $rate8 = Rate::find(8);
        $rate9 = Rate::find(9);

        return view('admin.manager.content.index-show-list-price', compact('profileData','rate1', 'rate2', 'rate3', 'rate4', 'rate5', 'rate6', 'rate7', 'rate8', 'rate9'));
    }//End Show Manager Pricelist

    public function storeManagerListPrice(Request $request){

        $request->validate([
            'product_type' => 'required',
            'product_category' => 'required',
            'list_price' => 'required',
            'product_description' => 'required',
        
        ]);

        $productType = $request->input('product_type');
        $productCategory = $request->input('product_category');
    
        $uuid = Str::uuid()->toString();
        $PLP_Code = 'PLP' .  '-' . $productType . '-' . $productCategory. '-' . substr($uuid, 0, 2);

        $PLP = ProductListPrice::create([
            'product_list_price_code' => $PLP_Code,
            'product_type' => $productType,
            'product_category' => $productCategory,
            'list_price' => $request->input('list_price'),
            'product_description' => $request->input('product_description'),
        ]);

        $PLP_id = $PLP->id;

        $preNeed = PreNeed::create([
            'product_list_price_id' => $PLP_id,
            'spot_cash' => $request->input('spot_cash'),
        ]);

        $atNeed = AtNeed::create([
            'product_list_price_id' => $PLP_id,
            'at_need' => $request->input('at_need'),
        ]);

        $DP = DownPayment::create([
            'product_list_price_id' => $PLP_id,
            'down_payment_amount' => $request->input('down_payment_amount'),
            'remaining_balance' => $request->input('remaining_balance'),
        ]);

        for ($i = 1; $i <= 5; $i++) {
    
            WithDownPayment::create([
                'product_list_price_id' => $PLP_id,
                'wdp_term' => $request->input("wdp_term_{$i}"),
                'wdp_annual_interest' => $request->input("wdp_annual_interest_{$i}"),
                'wdp_monthly_payment' => $request->input("wdp_monthly_payment_{$i}"),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
    
            NoDownPayment::create([
                'product_list_price_id' => $PLP_id,
                'ndp_term' => $request->input("ndp_term_{$i}"),
                'ndp_annual_interest' => $request->input("ndp_annual_interest_{$i}"),
                'ndp_monthly_payment' => $request->input("ndp_monthly_payment_{$i}"),
            ]);
        }
        
        for ($i = 1; $i <= 5; $i++) {
    
            WithDownPaymentNoInterest::create([
                'product_list_price_id' => $PLP_id,
                'wdpni_term' => $request->input("wdpni_term_{$i}"),
                'wdpni_monthly_payment' => $request->input("wdpni_monthly_payment_{$i}"),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
    
            NoDownPaymentNoInterest::create([
                'product_list_price_id' => $PLP_id,
                'ndpni_term' => $request->input("ndpni_term_{$i}"),
                'ndpni_monthly_payment' => $request->input("ndpni_monthly_payment_{$i}"),
            ]);
        }

        //dd($request->all());

        $notification = [
            'message' => 'Product List Price Successfully Added!',
            'alert-type' => 'success',
        ];

        return redirect()->route('manager.show.all.list.price')->with($notification);
    }//End Show Manager Pricelist

    public function viewManagerListPrice(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $PLP_id = $request->route('id');
        $PLP = ProductListPrice::with('preNeed','atNeed','withDownPayment','noDownPayment','withDownPaymentNoInterest', 'noDownPaymentNoInterest')->find($PLP_id);

        $rate1 = Rate::find(1);
        $rate2 = Rate::find(2);
        $rate3 = Rate::find(3);
        $rate4 = Rate::find(4);
        $rate5 = Rate::find(5);
        $rate6 = Rate::find(6);
        $rate7 = Rate::find(7);
        $rate8 = Rate::find(8);
        $rate9 = Rate::find(9);

        return view('admin.manager.content.index-edit-list-price', compact('profileData','PLP','rate1', 'rate2', 'rate3', 'rate4', 'rate5', 'rate6', 'rate7', 'rate8', 'rate9'));
    }//End Show All Manager Pricelist

    public function deleteManagerListPrice(Request $request){

        $PLP_id = $request->route('id');
        $PLP = ProductListPrice::findOrFail($PLP_id)->delete();

        $notification = [
            'message' => 'Product List Price Successfully Deleted!',
            'alert-type' => 'success',
        ];

       return redirect()->back()->with($notification);
    }
}