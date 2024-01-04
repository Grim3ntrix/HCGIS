<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\DB;

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

    public function addCustomerAccount(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $uuid = Str::uuid()->toString();
        $userCode = 'HCG' .  '-' . substr($uuid, 0, 4);

        $userId = $request->route('id');
        $user = User::find($userId);

        return view('admin.staff.content.index-add-customer-account', compact('userCode','profileData','user'));
    }

    public function storeCustomerAccount(Request $request)
    {
        // Validate user data
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'email' => 'required|unique:users|max:100',

            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required|in:Male,Female',
            'religion' => 'required',
            'date_of_birth' => 'required',
            'current_address' => 'required',
            'zip_code' => 'required',
            'marital_status' => 'required|in:Single,Married,Widow/Widower,Separated',
            'phone_number' => 'required|max:12',
        ]);

        // Wrap the entire process in a database transaction
        DB::beginTransaction();

        try {
            // Create and save the User first
            $uuid = Str::uuid()->toString();
            $userCode = 'HCG' .  '-' . substr($uuid, 0, 4);

            $email = $request->input('email');
            $firstName = $request->input('first_name');
            $lastName = $request->input('last_name');
            $middleName = $request->input('middle_initial');
            $phoneNumber = $request->input('phone_number');

            $userCustomer = new User;
            $userCustomer->user_code = $userCode;
            $userCustomer->name = $firstName . ' ' . $middleName . ' ' . $lastName;
            $userCustomer->email = $email;
            $userCustomer->phone = $phoneNumber;
            $userCustomer->password = Hash::make($request->input('password'));
            $userCustomer->role = $request->input('role');
            $userCustomer->save();

            // Retrieve the saved User ID
            $userId = $userCustomer->id;

            // Use the User ID to create or update PersonalInformation
            $personalInformation = PersonalInformation::firstOrNew(['user_id' => $userId]);

            $personalInformation->fill([
                'user_id' => $userId,
                'last_name' => $firstName,
                'first_name' => $lastName,
                'middle_initial' => $middleName,
                'name_extension' => $request->input('name_extension'),
                'gender' => $request->input('gender'),
                'religion' => $request->input('religion'),
                'date_of_birth' => $request->input('date_of_birth'),
                'current_address' => $request->input('current_address'),
                'zip_code' => $request->input('zip_code'),
                'marital_status' => $request->input('marital_status'),
                'spouse' => $request->input('spouse'),
                'email_address' => $email,  
                'telephone' => $request->input('telephone'),
                'phone_number' => $phoneNumber,
            ]);

            $personalInformation->save();

            DB::commit();// Commit the transaction if everything is successful

            $notification = [
                'message' => 'Customer Account Successfully Added!',
                'alert-type' => 'success',
            ];

            return redirect()->route('show.customer.account')->with($notification);
        } catch (\Exception $e) {
            
            DB::rollBack();// Rollback the transaction if an exception occurs

            \Log::error($e);

            $notification = [
                'message' => 'An unexpected error occurred, please try again.',
                'alert-type' => 'error',
            ];
        return redirect()->back()->with($notification);// Handle the exception, log it, or return an error response
        }
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
