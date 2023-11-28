<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObituaryController extends Controller
{
    public function showObituary(){
        return view('admin.staff.content.index-show-obituary');
    }

    
}
