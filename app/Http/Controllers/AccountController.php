<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function showAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $data = User::whereIn('role', ['manager','staff'])->latest()->get();

        return view('admin.manager.content.index-show-account', compact('data','profileData'));
    }

    public function addAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.manager.content.index-add-account', compact('profileData'));
    }

    public function storeAccount(Request $request){

        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'role' => 'required|in:manager,staff',
            'email' => 'required|unique:users|max:100',
        ]);

        $userAdmin = new User;
    
        $userAdmin->name = $request->input('name');
        $userAdmin->email = $request->input('email');
        $userAdmin->password = Hash::make($request->input('password'));
        $userAdmin->role = $request->input('role');
        //dd($request->all());
        $userAdmin->save();

        $notification = [
            'message' => 'Admin Account Successfully Added!',
            'alert-type' => 'success',
        ];

        return redirect()->route('show.admin.account')->with($notification);
    }

    public function deleteAccount(Request $request){
        $userId = $request->route('id');
        $user = User::findOrFail($userId);
        $user->delete();
    
        $notification = [
            'message' => 'Admin Account Successfully Deleted!',
            'alert-type' => 'success',
        ];
    
        return redirect()->back()->with($notification);
    }    
    
}
