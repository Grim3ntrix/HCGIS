<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SetTermNoInterestPurchase;

class SetTermNoInterestPurchaseController extends Controller
{

    public function showSetTermNoInterestPurchase(Request $request){

        $termThatHasBeenSet = SetTermNoInterestPurchase::first();

        return view('admin.manager.content.index-show-set-term-no-interest-purchase', compact('termThatHasBeenSet'));
    }//End Show Set Term

    public function storeSetTermNoInterestPurchase(Request $request){

        $request->validate([
            'set_term' => 'required',
        ]);

        $setTerm = SetTermNoInterestPurchase::first(); // Assuming you want to get the first SetTermNoInterestPurchase record

        if ($setTerm) {
            $setTerm->update([
                'term_in_months' => $request->input("set_term"),
            ]);
        } else {
            SetTermNoInterestPurchase::create([
                'term_in_months' => $request->input("set_term"),
            ]);
        }

        $notification = [
            'message' => 'Term for No Interest Purchase Successfully Updated!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);

    }//End Store Set Term
}