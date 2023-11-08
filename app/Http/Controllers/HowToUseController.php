<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HowToUseController extends Controller
{
    public function ManagerWatchOnline(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.manager.content.index-watch-online', compact('profileData'));
    }

    public function ManagerFAQ(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.manager.content.index-faq', compact('profileData'));
    }
    
    public function StaffWatchOnline(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.staff.content.index-watch-online', compact('profileData'));
    }

    public function StaffFAQ(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.staff.content.index-faq', compact('profileData'));
    }

    public function CustomerWatchOnline(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('web_customer.verified_customer.content.index-watch-online', compact('profileData'));
    }

    public function CustomerFAQ(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('web_customer.verified_customer.content.index-faq', compact('profileData'));
    }
}
