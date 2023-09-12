<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManagerController extends Controller
{
    public function ManagerDashboard(){

        return view('admin.index');
    }//End Method

     /**
     * Destroy an authenticated session.
     */
    public function ManagerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/manager/login');
    }//End Method 

    public function ManagerLogin(Request $request)
    {
        return view('admin.manager.manager_login');
    }//End Method 

    public function ManagerProfile(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.manager.manager_profile_view', compact('profileData'));
    }//End Method

}
