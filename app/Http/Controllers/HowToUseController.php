<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToUseController extends Controller
{
    public function WatchOnline(){
        return view('admin.staff.body.watch-online');
    }

    public function FAQ(){
        return view('admin.staff.body.faq');
    }
}
