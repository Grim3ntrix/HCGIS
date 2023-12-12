<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PaymentController extends Controller
{
    public function showCustomer(Request $request){

        if($request->ajax()){
            
            $showCustomer = User::where('role','customer');
            return DataTables::of($showCustomer)->addIndexColumn()->make(true);        
        }
        return view('admin.staff.content.index-show-payment');
    }

    public function addPayment(){


        return view('admin.staff.content.index-add-payment');
    }

}
