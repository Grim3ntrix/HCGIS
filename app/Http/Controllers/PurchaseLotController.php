<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;

class PurchaseLotController extends Controller
{
    public function purchaseLot(UserDataTable $userDataTable)
    {
        $datatable = $userDataTable;

        return view('admin.staff.content.index-purchase-lot', compact('datatable'));
    }
}
