<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ListPrice;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ListPriceController extends Controller
{
    public function showManagerListPrice(Request $request){

        return view('admin.manager.content.index-show-list-price');
    }//End Show Manager Pricelist

    
}
