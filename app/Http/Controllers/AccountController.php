<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function CreateAccount(){
        return view('admin.manager.body.create-account');
    }
}
