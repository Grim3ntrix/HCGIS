<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;
use App\Models\PersonalInformation;
use App\Models\PurchaseDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Phase;
use App\Models\ProductEntry;
use App\Models\ProductListPrice;
use App\Models\AtNeed;
use App\Models\PreNeed;
use App\Models\WithDownPayment;
use App\Models\NoDownPayment;
use App\Models\WithDownPaymentNoInterest;
use App\Models\NoDownPaymentNoInterest;
use App\Models\Block;

class PurchaseLotController extends Controller
{
    
    public function showUserCustomer(Request $request){

        if($request->ajax()){
            
            $data = User::where('role','customer');
            return DataTables::of($data)->addIndexColumn()->make(true);        
        }
        return view('admin.staff.content.index-show-registered-customer');

    }//End Method (Purchase Lot Customers DataTable)

    public function showPurchaseProductDetailForm(Request $request){

        $userId = $request->route('id');
        $user = User::findOrFail($userId);

        $phase = Phase::get();

        return view('admin.staff.content.index-show-purchase-detail', compact('phase', 'user'));
    }//End Method (Customer Product Details)

    public function getEntryCode(Request $request, $selectedPhase)
    {

        $query = ProductEntry::query();

        if ($selectedPhase) {
            $query->where('phase_id', $selectedPhase);
        }

        $entryCodes = $query->get();

        return response()->json($entryCodes ? $entryCodes->toArray() : []);
    }

    public function getEntryDetails(Request $request, $entryCodeId)
    {
        // Use $entryCodeId to fetch details from the 'ProductEntry' table
        $entryDetails = ProductEntry::find($entryCodeId);
    
        // Fetch additional information from the 'ProductListPrice' table
        $listPriceDetails = ProductListPrice::where('id', $entryDetails->product_list_price_id)->first();
    
        // Fetch additional information from the 'Phase' table
        $phaseDetails = Phase::where('id', $entryDetails->phase_id)->first();

        $blockDetails = Block::where('id', $entryCodeId)->first();
    
        // Return details as a JSON response
        return response()->json([
            'entryDetails' => $entryDetails ? $entryDetails->toArray() : [],
            'listPriceDetails' => $listPriceDetails ? $listPriceDetails->toArray() : [],
            'phaseDetails' => $phaseDetails ? $phaseDetails->toArray() : [],
            'blockDetails' => $blockDetails ? $blockDetails->toArray() : [],
        ]);
    }
    
    public function getProductListPriceModeDetails(Request $request, $selectedPlpMode)
    {
        // Retrieve plpId and term from the request
        $plpID_of_specific_entryCode = $request->input('plpId');
        $termValue = $request->input('selectedTerm');

        switch ($selectedPlpMode) {
            case 'At-Need':
                $plpModeDetails = AtNeed::where('product_list_price_id', $plpID_of_specific_entryCode)
                    ->first();
                break;
            case 'Spot Cash':
                $plpModeDetails = PreNeed::where('product_list_price_id', $plpID_of_specific_entryCode)
                    ->first();
                break;
            case 'With Down Payment':
                $plpModeDetails = WithDownPayment::where('product_list_price_id', $plpID_of_specific_entryCode)
                    //->where('wdp_term', $termValue)
                    ->get();
                break;
            case 'No Down Payment':
                $plpModeDetails = NoDownPayment::where('product_list_price_id', $plpID_of_specific_entryCode)
                    //->where('ndp_term', $termValue)
                    ->get();
                break;
            case 'With Down Payment No Interest':
                $plpModeDetails = WithDownPaymentNoInterest::where('product_list_price_id', $plpID_of_specific_entryCode)
                    //->where('wdpni_term', $termValue)
                    ->get();
                break;
            case 'No Down Payment No Interest':
                $plpModeDetails = NoDownPaymentNoInterest::where('product_list_price_id', $plpID_of_specific_entryCode)
                    //->where('ndpni_term', $termValue)
                    ->get();
                break;
            default:
                $plpModeDetails = null;
        }

        return response()->json($plpModeDetails ? $plpModeDetails->toArray() : []);
    }

    public function getTermDetails(Request $request, $selectedTerm, $selectedPlpMode, $plpId) {
        
        $selectedPlpMode = $request->input('selectedPlpMode');
        $plpIdValue = $request->input('plpId');

        switch ($selectedPlpMode) {
            case 'At-Need':
                $plpModeAndTermDetails = AtNeed::where('product_list_price_id', $plpIdValue)
                    ->first();
                break;
            case 'Spot Cash':
                $plpModeAndTermDetails = PreNeed::where('product_list_price_id', $plpIdValue)
                    ->first();
                break;
            case 'With Down Payment':
                $plpModeAndTermDetails = WithDownPayment::where('product_list_price_id', $plpIdValue)
                    ->where('wdp_term', $selectedTerm)
                    ->first();
                break;
            case 'No Down Payment':
                $plpModeAndTermDetails = NoDownPayment::where('product_list_price_id', $plpIdValue)
                    ->where('ndp_term', $selectedTerm)
                    ->first();
                break;
            case 'With Down Payment No Interest':
                $plpModeAndTermDetails = WithDownPaymentNoInterest::where('product_list_price_id', $plpIdValue)
                    ->where('wdpni_term', $selectedTerm)
                    ->first();
                break;
            case 'No Down Payment No Interest':
                $plpModeAndTermDetails = NoDownPaymentNoInterest::where('product_list_price_id', $plpIdValue)
                    ->where('ndpni_term', $selectedTerm)
                    ->first();
                break;
            default:
                $plpModeAndTermDetails = null;
        }

        return response()->json($plpModeAndTermDetails ? $plpModeAndTermDetails->toArray() : []);

    }//End Method


        
    public function storePurchaseProductDetailForm(Request $request){
    }//End Method (Customer Product Details)

}