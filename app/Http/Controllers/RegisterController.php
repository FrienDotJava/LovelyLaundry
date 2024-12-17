<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        if($request->verifPassword != $request->password){
            Session::flash('error', 'Passwords do not match.');
            
            return redirect('register');
        }
        else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => "Customer",
                'noHp' => $request->noHp,
                'address' => $request->address,
            ]);
    
            Session::flash('message', 'Register Successfully. Your account is active, please log in using your username and password..');
            return redirect('register');
        }
    }
}
