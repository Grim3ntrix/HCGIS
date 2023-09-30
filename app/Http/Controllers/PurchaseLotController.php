<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;
use DataTables;

class PurchaseLotController extends Controller
{
    public function purchaseLot(Request $request){

        if($request->ajax()){
            $data = User::where('role','customer');
            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('admin.staff.content.index-purchase-lot');
    }
}