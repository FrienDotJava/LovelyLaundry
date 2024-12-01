<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Customer')->paginate(10);
        return view('admin.manage_user', compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.edit_user', compact('users'));
    }

    public function update(Request $request, $id){
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
}
