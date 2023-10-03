<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;
use DataTables;

class PurchaseLotController extends Controller
{
    public function purchaseLot(Request $request){

        if($request->ajax()){
            $data = User::where('role','customer');
            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('admin.staff.content.index-purchase-lot');
    }//End Method (Purchase Lot Customers DataTable)

    public function showPurchaseLotForm(){
        return view('admin.staff.content.index-add-purchase-lot');
    }//End Method (Customer Personal Informations)

    public function showPurchaseProductDetail(){
        return view('admin.staff.content.index-add-product-detail-of-purchase');
    }//End Method (Customer Product Details)
}