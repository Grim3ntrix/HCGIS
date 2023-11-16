<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntermentController extends Controller
{
    public function showInterment(){
        return view('admin.staff.content.index-show-interment');
    }

    public function CustomerShowIntern(){
        return view('web_customer.verified_customer.body.show-intern');
    }
}
