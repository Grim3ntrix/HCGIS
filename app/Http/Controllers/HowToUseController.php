<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HowToUseController extends Controller
{

    public function showCustomerWatchOnline(){

        return view('web-customer.verified-customer.content.index-show-watch-online');
    }

    public function showCustomerFAQ(){

        return view('web-customer.verified-customer.content.index-show-faq');
    }
}
