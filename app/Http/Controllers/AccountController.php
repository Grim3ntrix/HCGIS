<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function showAccount(){
        return view('admin.manager.body.create-account');
    }
}
