<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductListPrice;
use App\Models\DownPayment;
use App\Models\WithDownPayment;
use App\Models\NoDownPayment;
use App\Models\WithDownPaymentNoInterest;
use App\Models\NoDownPaymentNoInterest;
use App\Models\ProductEntry;
use App\Models\BlockQuantity;

class MemorialLotEntryController extends Controller
{
    public function showMemorialLotEntry(Request $request){

        $showEntryInfo = ProductEntry::latest()->with('blockQuantity','productListPrice')->get();

        return view('admin.staff.content.index-show-memorial-lot-entry', compact('showEntryInfo'));
    }

    public function addMemorialLotEntry(Request $request){

        $PLP_CODE = ProductListPrice::with('downPayment','preNeed','atNeed')->get();

        return view('admin.staff.content.index-add-memorial-lot-entry', compact('PLP_CODE'));
    }

    public function getSelectedMode($productId, $Term)
    {
        $selectedMode = request('selectedMode');

        switch ($selectedMode) {
            case 'With Down Payment':
                $data = WithDownPayment::where('product_list_price_id', $productId)
                    ->where('wdp_term', $Term)
                    ->first();
                break;
            case 'No Down Payment':
                $data = NoDownPayment::where('product_list_price_id', $productId)
                    ->where('ndp_term', $Term)
                    ->first();
                break;
            case 'With Down Payment No Interest':
                $data = WithDownPaymentNoInterest::where('product_list_price_id', $productId)
                    ->where('wdpni_term', $Term)
                    ->first();
                break;
            case 'No Down Payment No Interest':
                $data = NoDownPaymentNoInterest::where('product_list_price_id', $productId)
                    ->where('ndpni_term', $Term)
                    ->first();
                break;
            default:
            $data = null;
        }

    return response()->json($data ? $data->toArray() : []);
    }
    
    public function storeMemorialLotEntry(Request $request){

        $request->validate([
            'phase' => 'required',
            'block_quantity' => 'required',
        ]);

        $PLP_id = $request->input('id');
        $PLP_code = ProductListPrice::find($PLP_id)->product_list_price_code;

        $PLP_mode = $request->input('product_list_price_mode');
        $term = $request->input('wdp_term');
        $phase = $request->input('phase');

        $entryCode =  $PLP_code . '-' . $phase . $term;

        $ProductEntry = ProductEntry::create([

            'product_list_price_id' => $PLP_id,
            'product_list_price_code' => $PLP_code,
            'product_entry_code' => $entryCode,

            'down_payment_amount' => $request->input('down_payment_amount'),
            'balance' => $request->input('remaining_balance'),
            'product_list_price_mode' => $PLP_mode,
            'term' => $term,
            'phase' => $phase,

            'at_need' => $request->input('at_need'),
            'spot_cash' => $request->input('spot_cash'),

            'wdp_interest' => $request->input('wdp_annual_interest'),
            'wdp_monthly' => $request->input('wdp_monthly_payment'),
            'wdp_end_amount' => $request->input('wdp_end_price'),

            'ndp_interest' => $request->input('ndp_annual_interest'),
            'ndp_monthly' => $request->input('ndp_monthly_payment'),
            'ndp_end_amount' => $request->input('ndp_end_price'),

            'wdpni_monthly' => $request->input('wdpni_monthly_payment'),
            'wdpni_end_amount' => $request->input('wdpni_end_price'),

            'ndpni_monthly' => $request->input('ndpni_monthly_payment'),
            'ndpni_end_amount' => $request->input('ndpni_end_price'),

        ]);

        $productEntry_id = $ProductEntry->id;

        $blockQuantity = BlockQuantity::create([
            'product_entry_id' => $productEntry_id,
            'block_quantity' => $request->input('block_quantity'),
        ]);

        //dd($request->all());

        $notification = [
            'message' => 'Product Entry Successfully Added!',
            'alert-type' => 'success',
        ];
    
        return redirect()->back()->with($notification);
    }

}
