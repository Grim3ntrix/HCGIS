<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function CustomerDashboard(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.body.index_customer', compact('profileData'));//passProfile to the view
    }//End Method

    /**
     * Destroy an authenticated session.
     */
    public function CustomerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }//End Method 



    public function CustomerProfile(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('web_customer.verified_customer.customer_profile_view', compact('profileData'));
    }//End Method

    public function CustomerProfileStore(Request $request)
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
            @unlink(public_path('upload/admin_images/'.$data->photo));//replaceImage
            $filename = date('YmdHi').$file->getClientOriginalName();//202309131430example.jpg
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }
            $data->save();

            $notification = array(
                'message' => 'Profile Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
    }//End Method

    public function CustomerChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('web_customer.verified_customer.customer_change_password', compact('profileData'));
    }//End Method

    public function CustomerUpdatePassword(Request $request){

        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        
        //Old not match
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error',
            );
    
            return back()->with($notification);
        }
    
        //New Password Updated!
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
    
        $notification = array(
            'message' => 'Password Change Successfully!',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
    

}
