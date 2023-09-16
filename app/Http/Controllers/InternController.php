<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternController extends Controller
{
    public function Intern(){
        return view('admin.staff.body.add-intern');
    }
}
