<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller
{
    public function showStaffChat(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.staff.content.index-show-chat', compact('profileData'));
    }
    public function showManagerChat(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.manager.content.index-show-chat', compact('profileData'));
    }

    public function showCustomerChat(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('web-customer.verified-customer.content.index-show-chat', compact('profileData'));
    }
}
