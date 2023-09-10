<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function ManagerDashboard(){

        return view('admin.manager.manager_dashboard');
    }//End Method
}
