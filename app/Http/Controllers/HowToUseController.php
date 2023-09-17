<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToUseController extends Controller
{
    public function StaffWatchOnline(){
        return view('admin.staff.body.watch-online');
    }

    public function StaffFAQ(){
        return view('admin.staff.body.faq');
    }

    public function ManagerWatchOnline(){
        return view('admin.manager.body.watch-online');
    }

    public function ManagerFAQ(){
        return view('admin.manager.body.faq');
    }

    public function CustomerWatchOnline(){
        return view('web_customer.verified_customer.body.watch-online');
    }

    public function CustomerFAQ(){
        return view('web_customer.verified_customer.body.faq');
    }
}
