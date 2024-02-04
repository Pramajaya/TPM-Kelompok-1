<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Identity;
use Illuminate\Http\Request;
use App\Models\Birthplace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function registration(){
        $identity = Identity::all();
        $birthplaces = Birthplace::all();
        return view('registerData2', compact('identity'), compact('birthplaces'));
    }

    function loginhack(){
        return view('loginhack');
    }

    function registration_post(Request $request){
        $request->validate([
            'username' => 'required|string|unique:users',
            'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
            'identity_id' => 'required'
        ]);


        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'identity_id' => $request->identity_name
        ]);


        /*
        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['identity_name'] = $request->identity_name;
        $user = User::create($data);
        */

        return redirect(route('dashboard'))->with('success', 'Registered Successfully!');
    }

    function loginhackpost(Request $request){
        $credentials = [
            'username' => $request->username,
            'password' => $request->password

        ];

        if(Auth::attemt($credentials)){
            return redirect('/dashboard')->with('success', "Login success");
        }

        return back()->with('error', 'Login unsuccessful');
    }
}
