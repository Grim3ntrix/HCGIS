<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function Chat(){
        return view('admin.staff.body.chat');
    }
}
