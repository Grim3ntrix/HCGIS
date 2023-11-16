<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemorialLotEntryController extends Controller
{
    public function showMemorialLotEntry(){
        return view('admin.staff.content.index-show-memorial-lot-entry');
    }

}
