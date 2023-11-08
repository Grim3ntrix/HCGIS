<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    public function showAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.manager.content.index-create-account', compact('profileData'));
    }
}
