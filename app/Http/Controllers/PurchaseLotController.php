<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Auth;

class PurchaseLotController extends Controller
{
    public function purchaseLot(Request $request){

        if($request->ajax()){
            
            $data = User::where('role','customer');
            return DataTables::of($data)->addIndexColumn()->make(true);          
        }
        return view('admin.staff.content.index-purchase-lot');

    }//End Method (Purchase Lot Customers DataTable)

    public function showPersonalInfoForm(){
        $userId = $row['user_id'];
        $user = User::find($userId);
        
        return view('admin.staff.content.index-add-purchase-lot');
    }//End Method (Customer Personal Informations)

    public function storePersonalInfoForm(Request $request){
        

        $userId = $request->input('user_id');
        $customerPersonalInfo = new PersonalInformation();
        $customerPersonalInfo->user_id = $userId;
        $customerPersonalInfo->last_name = $request->input('last_name');
        $customerPersonalInfo->first_name = $request->input('first_name');
        $customerPersonalInfo->middle_initial = $request->input('middle_initial');
        $customerPersonalInfo->name_extension = $request->input('name_extension');
        $customerPersonalInfo->gender = $request->input('gender');
        $customerPersonalInfo->religion = $request->input('religion');
        $customerPersonalInfo->date_of_birth = $request->input('date_of_birth');
        $customerPersonalInfo->current_address = $request->input('current_address');
        $customerPersonalInfo->zip_code = $request->input('zip_code');
        $customerPersonalInfo->marital_status = $request->input('marital_status');
        $customerPersonalInfo->spouse = $request->input('spouse');
        $customerPersonalInfo->email_address = $request->input('email_address');
        $customerPersonalInfo->telephone = $request->input('telephone');
        $customerPersonalInfo->phone_number = $request->input('phone_number');
        $customerPersonalInfo->sales_counselor = $request->input('sales_counselor');
        $customerPersonalInfo->agency_manager = $request->input('agency_manager');
        dd($request->all());
        $customerPersonalInfo->save();
        
    }//End Method (Customer Personal Informations)

    public function showPurchaseProductDetailForm(){
        return view('admin.staff.content.index-add-product-detail-of-purchase');
    }//End Method (Customer Product Details)

}