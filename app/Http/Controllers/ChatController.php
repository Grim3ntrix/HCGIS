<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller
{
    public function StaffChat(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.staff.body.chat', compact('profileData'));
    }
    public function ManagerChat(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.manager.content.index-chat', compact('profileData'));
    }

    public function CustomerChat(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('web_customer.verified_customer.body.chat', compact('profileData'));
    }
}
