<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternController extends Controller
{
    public function StaffAddIntern(){
        return view('admin.staff.body.add-intern');
    }

    public function CustomerShowIntern(){
        return view('web_customer.verified_customer.body.show-intern');
    }
}
