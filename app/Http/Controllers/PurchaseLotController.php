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
        $user = User::findOrfail($userId);
        
        return view('admin.staff.content.index-add-purchase-lot', compact('user'));
    }//End Method (Customer Personal Informations)

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
            'email_address' => 'required|unique:personal_information|max:100',
            'telephone' => 'required',
            'phone_number' => 'required|unique:personal_information|max:12',
            'sales_counselor' => 'required',
            'agency_manager' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::findOrFail($userId);
        
        $user->personalInformation()->create($request->all());

        $notification = array(
            'message' => 'Successfully Added!',
            'alert-type' => 'success',
        );

        return redirect()->route('staff.show.productdetail.form', ['id' => $user->id])->with($notification);
        
    }//End Method (Customer Personal Informations)

    public function showPurchaseProductDetailForm(Request $request){

        return view('admin.staff.content.index-add-product-detail-of-purchase');
    }//End Method (Customer Product Details)

    public function storePurchaseProductDetailForm(Request $request){

    
    }//End Method (Customer Product Details)


}