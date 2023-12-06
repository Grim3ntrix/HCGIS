<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Phase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PhaseController extends Controller
{
    public function showManagerPhase(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        if($request->ajax()){
            
            $Phase = Phase::all();
            return DataTables::of($Phase)->addIndexColumn()->make(true);          
        }

        return view('admin.manager.content.index-show-phase', compact('profileData'));
    }

    public function storeManagerPhase(Request $request){

        $ProductEntry = Phase::create([
            'phase_name' => $request->input('phase_name'),
        ]);

        $notification = [
            'message' => 'Phase Successfully Added!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function updateManagerPhase(Request $request)
    {
        $phaseID = $request->input('id');
    
        $updatePhase = Phase::where('id', $phaseID)->update([
            'phase_name' => $request->input('phase_name'),
            'status' => $request->input('status'),
        ]);
    
        $notification = [
            'message' => 'Phase Updated Successfully!',
            'alert-type' => 'success',
        ];
    
        return response()->json($notification);
    }    

    public function deleteManagerPhase(Request $request){

        $phaseID = $request->route('id');
        $deletePhase = Phase::find($phaseID)->delete();

        $notification = [
            'message' => 'Phase Deleted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
