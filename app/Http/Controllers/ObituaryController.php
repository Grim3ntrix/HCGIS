<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObituaryController extends Controller
{
    public function showInterment(){
        return view('admin.staff.content.index-show-interment');
    }

    
}
