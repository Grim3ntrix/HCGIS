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

class PurchaseLotController extends Controller
{
    
    public function showUserCustomer(Request $request){

        if($request->ajax()){
            
            $data = User::where('role','customer');
            return DataTables::of($data)->addIndexColumn()->make(true);        
        }
        return view('admin.staff.content.index-show-registered-customer');

    }//End Method (Purchase Lot Customers DataTable)

    public function showPersonalInfoForm(Request $request){

        $userId = $request->route('id');
        $user = User::findOrFail($userId);
        
        return view('admin.staff.content.index-add-personal-info', compact('user'));
    }//End Method (Add Customer Personal Informations)

    public function storePersonalInfoForm(Request $request){

        //Validation
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'gender' => 'required|in:Male,Female',
            'religion' => 'required',
            'date_of_birth' => 'required',
            'current_address' => 'required',
            'zip_code' => 'required',
            'marital_status' => 'required|in:Single,Married,Widow/Widower,Separated',
            'email_address' => 'required|max:100',
            'telephone' => 'required',
            'phone_number' => 'required|max:12',
            'sales_counselor' => 'required',
            'agency_manager' => 'required',
        ]);

        $userId = $request->input('user_id');
        $userID = User::find($userId);

        $personalInformation = PersonalInformation::firstOrNew(['user_id' => $userID->id]);
        
        $personalInformation->fill([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_initial' => $request->input('middle_initial'),
            'name_extension' => $request->input('name_extension'),
            'gender' => $request->input('gender'),
            'religion' => $request->input('religion'),
            'date_of_birth' => $request->input('date_of_birth'),
            'current_address' => $request->input('current_address'),
            'zip_code' => $request->input('zip_code'),
            'marital_status' => $request->input('marital_status'),
            'spouse' => $request->input('spouse'),
            'email_address' => $request->input('email_address'),
            'telephone' => $request->input('telephone'),
            'phone_number' => $request->input('phone_number'),
            'sales_counselor' => $request->input('sales_counselor'),
            'agency_manager' => $request->input('agency_manager'),
        ]);
        
        $personalInformation->save();
        
        $notification = [
            'message' => 'Personal Info Successfully Updated!',
            'alert-type' => 'success',
        ];
        
        return redirect()->route('staff.show.productdetail.form', ['id' => $userID])->with($notification);
    }//End Method (Customer Personal Informations)

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
        // Use $entryCodeId to fetch additional details from the database
        $entryDetails = ProductEntry::find($entryCodeId);

        // Return the details as a JSON response
        return response()->json($entryDetails ? $entryDetails->toArray() : []);
    }

        
    public function storePurchaseProductDetailForm(Request $request){

    
    }//End Method (Customer Product Details)

}