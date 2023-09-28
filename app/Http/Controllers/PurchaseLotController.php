<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class PurchaseLotController extends Controller
{
    public function purchaseLot(Request $request){

        $users = User::all()->where('role','customer');
        return view('admin.staff.content.index-purchase-lot', compact('users'));
        
    }
}
