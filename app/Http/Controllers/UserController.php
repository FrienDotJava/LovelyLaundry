<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Customer')->paginate(10);
        return view('admin.manage_user', compact('users'));
    }

    public function editByAdmin($id){
        $users = User::find($id);
        return view('admin.edit_user', compact('users'));
    }

    public function editByUser(Request $request){
        $users = Auth::user();
        return view('user.edit_profile', compact('users'));
    }

    public function updateByAdmin(Request $request, $id){
        $user = User::find($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'noHp' => 'required',
            'address' => 'required',
        ],[
            'name.required' => 'Name cannot be empty.',
            'noHp.required' => 'Phone number cannot be empty.',
            'address.required' => 'Address cannot be empty.',
        ]);

        $user->update($validatedData);
        return redirect()->route('manageuser')->with(['success'=>'Data has been successfully updated!']);
    }

    public function updateByUser(Request $request){
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required',
            'noHp' => 'required',
            'address' => 'required',
        ],[
            'name.required' => 'Name cannot be empty.',
            'noHp.required' => 'Phone number cannot be empty.',
            'address.required' => 'Address cannot be empty.',
        ]);

        $user->update($validatedData);
        return redirect()->route('profileuser')->with(['success'=>'Data has been successfully updated!']);
    }


    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('manageuser')->with(['success'=>'Data has been successfully deleted!']);
    }

    public function search(Request $request)
    {
        $query = $request->query('name');
        $users = User::where('role', 'Customer')->where('name', 'LIKE', '%'. $query .'%' )->paginate(10);

        return view('admin.manage_user', compact('users'));
    }
    
    public function editPassword(Request $request){
        $users = Auth::user();
        return view('user.edit_password', compact('users'));
    }

    public function changePassword(Request $request){
        $user = Auth::user();

        $validatedData = $request->validate([
            'oldpwd' => 'required',
            'newpwd' => 'required',
            'newpwd1' => 'required',
        ]);
        
        if($request->newpwd == $request->oldpwd){
            Session::flash('error', 'New password cannot be the same as the current password.');
            return redirect()->route('usereditpassword');
        }
        
        if($request->newpwd != $request->newpwd1){
            Session::flash('error', 'Passwords do not match.');
            return redirect()->route('usereditpassword');
        }
        
        if(!Hash::check($request->oldpwd, $user->password)){
            Session::flash('error', 'The current password is incorrect.');
            return redirect()->route('usereditpassword');
        }
        
        
        
        $user->update(['password'=>Hash::make($request->newpwd)]);
        return redirect()->route('profileuser')->with(['success'=>'Password has been successfully updated!']);
    }
}
