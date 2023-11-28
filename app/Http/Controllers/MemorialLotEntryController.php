<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductListPrice;
use App\Models\DownPayment;
use App\Models\WithDownPayment;

class MemorialLotEntryController extends Controller
{
    public function showMemorialLotEntry(Request $request){

        return view('admin.staff.content.index-show-memorial-lot-entry');
    }

    public function addMemorialLotEntry(Request $request){

        $PLP_CODE = ProductListPrice::with('downPayment','preNeed','atNeed','withDownPayment','noDownPayment','withDownPaymentNoInterest','noDownPaymentNoInterest')->get();

        return view('admin.staff.content.index-add-memorial-lot-entry', compact('PLP_CODE'));
    }

    public function dataWithDownPayment($id)
    {
        $withDownPaymentData = WithDownPayment::where('product_list_price_id', $id)->first();

        return response()->json($withDownPaymentData);
    }

    public function storeMemorialLotEntry(Request $request){

        //dd($request->all());
        return redirect()->back();
    }

}
