<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function StaffDashboard(){
        return view('admin.staff.staff_dashboard');
    }//End Method
}
