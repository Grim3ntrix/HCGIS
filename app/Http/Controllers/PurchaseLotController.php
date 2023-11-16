<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use App\Models\PersonalInformation;
use App\Models\PurchaseDetail;
use Illuminate\Support\Facades\Auth;

class PurchaseLotController extends Controller
{
    
    public function showUserCustomer(Request $request){

        if($request->ajax()){
            
            $data = User::where('role','customer');
            return DataTables::of($data)->addIndexColumn()->make(true);          
        }
        return view('admin.staff.content.index-purchase-lot');

    }//End Method (Purchase Lot Customers DataTable)

    public function showPersonalInfoForm(Request $request){

        $userId = $request->route('id');
        $user = User::findOrFail($userId);
        
        return view('admin.staff.content.index-add-purchase-lot', compact('user'));
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

        $user = User::findorFail($request->input('user_id'));
        
        $personalInformation = PersonalInformation::updateOrCreate([
            
            'user_id' => $request->input('user_id'),
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
        
        $personalInformation->user()->associate($user);
        $personalInformation->save();

        $notification = array(
            'message' => 'Personal Info Successfully Added!',
            'alert-type' => 'success',
        );

        return redirect()->route('staff.show.productdetail.form', ['id' => $user->id])->with($notification);
        
    }//End Method (Customer Personal Informations)

    public function showPurchaseProductDetailForm(Request $request){

        return view('admin.staff.content.index-show-purchase-detail');
    }//End Method (Customer Product Details)

    public function storePurchaseProductDetailForm(Request $request){

    
    }//End Method (Customer Product Details)


}