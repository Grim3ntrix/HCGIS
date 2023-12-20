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
use App\Models\Block;
use App\Models\Phase;

class MemorialLotEntryController extends Controller
{
    public function showMemorialLotEntry(Request $request){

        $showEntryInfo = ProductEntry::latest()->with('block','productListPrice','phase')->get();

        return view('admin.staff.content.index-show-memorial-lot-entry', compact('showEntryInfo'));
    }

    public function addMemorialLotEntry(Request $request){

        $PLP_CODE = ProductListPrice::get();

        $showEntry = Phase::get();

        return view('admin.staff.content.index-add-memorial-lot-entry', compact('PLP_CODE','showEntry'));
    }
    
    public function storeMemorialLotEntry(Request $request){

        $request->validate([
            'block_number' => 'required',
            'block_quantity' => 'required',
        ]);

        $PLP_id = $request->input('product_list_price_code');
        $PLP_code = ProductListPrice::find($PLP_id)->product_list_price_code;

        $phase_id = $request->input('phase_id');
        $phase_name = Phase::find($phase_id)->phase_name;

        $block_number = $request->input('block_number');

        $entryCode =  $PLP_code . '-' . $phase_name . '-' .  $block_number;

        $existingCode = ProductEntry::where('product_entry_code', $entryCode)->first();

        if ($existingCode) {
            $notification = [
                'message' => 'Product Entry Already Exists!',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }

        $ProductEntry = ProductEntry::create([

            'product_list_price_id' => $PLP_id,
            'product_entry_code' =>  $entryCode,
            'phase_id' =>  $phase_id,

        ]);

        $productEntry_id = $ProductEntry->id;

        $blockQuantity = Block::create([
            'product_entry_id' => $productEntry_id,
            'block_number' =>  $block_number,
            'block_quantity' => $request->input('block_quantity'),
        ]);

        //dd($request->all());

        $notification = [
            'message' => 'Product Entry Successfully Added!',
            'alert-type' => 'success',
        ];
    
        return redirect()->route('staff.show.memorial.lot')->with($notification);
    }

    public function deleteMemorialLotEntry(Request $request){

        $entryID = $request->route('id');
        $deleteEntry = ProductEntry::find($entryID)->delete();

        $notification = [
            'message' => 'Product Entry Successfully Deleted!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

}
