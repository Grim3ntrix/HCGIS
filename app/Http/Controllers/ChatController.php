<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function StaffChat(){
        return view('admin.staff.body.chat');
    }
    public function ManagerChat(){
        return view('admin.manager.body.chat');
    }

    public function CustomerChat(){
        return view('web_customer.verified_customer.body.chat');
    }
}
