<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Optional;
use App\Models\Rate;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RateController extends Controller
{
    public function showRate(Request $request){
        
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

        return view('admin.manager.content.index-show-discount-rate', compact('profileData','rate1', 'rate2', 'rate3', 'rate4', 'rate5', 'rate6', 'rate7', 'rate8', 'rate9', ));
    }//End Show Manager Rate

    public function storeRate(Request $request)
    {
        $request->validate([
            'interest_rate_percentage_1' => 'required',
            'interest_rate_percentage_2' => 'required',
            'interest_rate_percentage_3' => 'required',
            'interest_rate_percentage_4' => 'required',
            'interest_rate_percentage_5' => 'required',
            'interest_rate_percentage_6' => 'required',
            'interest_rate_percentage_7' => 'required',
            'interest_rate_percentage_8' => 'required',
            'interest_rate_percentage_9' => 'required',

            'interest_rate_decimal_1' => 'required',
            'interest_rate_decimal_2' => 'required',
            'interest_rate_decimal_3' => 'required',
            'interest_rate_decimal_4' => 'required',
            'interest_rate_decimal_5' => 'required',
            'interest_rate_decimal_6' => 'required',
            'interest_rate_decimal_7' => 'required',
            'interest_rate_decimal_8' => 'required',
            'interest_rate_decimal_9' => 'required',
        ]);

        for ($i = 1; $i <= 9; $i++) {

            $existingRate = Rate::where([
                'rate_name' => $request->input("rate_name_{$i}"),
                'term' => $request->input("term_{$i}"),
            ])->first();
    
            if ($existingRate) {
                $existingRate->update([
                    'interest_rate_percentage' => rtrim($request->input("interest_rate_percentage_{$i}"), '%'),
                    'interest_rate_decimal' => $request->input("interest_rate_decimal_{$i}"),
                ]);

            } else {
                Rate::create([
                    'rate_name' => $request->input("rate_name_{$i}"),
                    'term' => $request->input("term_{$i}"),
                    'interest_rate_percentage' => rtrim($request->input("interest_rate_percentage_{$i}"), '%'),
                    'interest_rate_decimal' => $request->input("interest_rate_decimal_{$i}"),
                ]);
            }
        }
        //dd($request->all());

        $notification = [
            'message' => 'Rates Successfully Added!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }//End Store Manager Rate

}
