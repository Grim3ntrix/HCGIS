<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function showWelcomeGuest(Request $request)
    {
        
        return view('web-customer.guest.welcome-guest');
    }//End Method
}
