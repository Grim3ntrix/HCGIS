<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Manager And Staff Account
|--------------------------------------------------------------------------
|
|  Account Manager for Manager CRUD to Create Admin/Agent Account
| 
| 
|
*/

class AccountController extends Controller
{
    public function showAgentAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $data = User::whereIn('role', ['manager','staff'])->latest()->get();
        
        return view('admin.manager.content.index-show-agent-account', compact('data','profileData'));
    }

    public function addAgentAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        
        $uuid = Str::uuid()->toString();
        $userCode = 'HCG' .  '-' . substr($uuid, 0, 4);

        return view('admin.manager.content.index-add-agent-account', compact('userCode','profileData'));
    }

    public function storeAgentAccount(Request $request){

        $uuid = Str::uuid()->toString();
        $userCode = 'HCG' .  '-' . substr($uuid, 0, 4);
    
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'role' => 'required|in:manager,staff',
            'email' => 'required|unique:users|max:100',
        ]);
    
        $userAdmin = new User;
    
        $userAdmin->user_code = $userCode;
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
    
        return redirect()->route('show.agent.account')->with($notification)->with('userCode', $userCode);
    }
    

    public function deleteAgentAccount(Request $request){
        $userId = $request->route('id');
        $user = User::findOrFail($userId);
        $user->delete();
    
        $notification = [
            'message' => 'Admin Account Successfully Deleted!',
            'alert-type' => 'success',
        ];
    
        return redirect()->back()->with($notification);
    }    

/*
|--------------------------------------------------------------------------
| Customer Account
|--------------------------------------------------------------------------
|
|  Account Manager for Staff CRUD to Create Customer Account
| 
| 
|
*/

    public function showCustomerAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $data = User::where('role', 'customer')->latest()->get();

        return view('admin.staff.content.index-show-customer-account', compact('data','profileData'));
    }

    public function addCustomerAccount(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $uuid = Str::uuid()->toString();
        $userCode = 'HCG' .  '-' . substr($uuid, 0, 4);

        return view('admin.staff.content.index-add-customer-account', compact('userCode','profileData'));
    }

    public function storeCustomerAccount(Request $request){

        $uuid = Str::uuid()->toString();
        $userCode = 'HCG' .  '-' . substr($uuid, 0, 4);
    
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'role' => 'required|in:customer',
            'email' => 'required|unique:users|max:100',
        ]);
    
        $userCustomer = new User;
    
        $userCustomer->user_code = $userCode;
        $userCustomer->name = $request->input('name');
        $userCustomer->email = $request->input('email');
        $userCustomer->password = Hash::make($request->input('password'));
        $userCustomer->role = $request->input('role');
        //dd($request->all());
        $userCustomer->save();
    
        $notification = [
            'message' => 'Customer Account Successfully Added!',
            'alert-type' => 'success',
        ];
    
        return redirect()->route('show.customer.account')->with($notification);
    }
    
    public function deleteCustomerAccount(Request $request){
        $userId = $request->route('id');
        $user = User::findOrFail($userId);
        $user->delete();
    
        $notification = [
            'message' => 'Customer Account Successfully Deleted!',
            'alert-type' => 'success',
        ];
    
        return redirect()->back()->with($notification);
    }    
    
}
