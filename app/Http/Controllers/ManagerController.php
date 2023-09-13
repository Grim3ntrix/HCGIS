<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManagerController extends Controller
{
    public function ManagerDashboard(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.body.index', compact('profileData'));//passProfile to the view
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

    public function ManagerProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();//202309131430example.jpg
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }
            $data->save();
            return redirect()->back();
    }//End Method

}
