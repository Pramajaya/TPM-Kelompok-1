<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function registration(){
        $identity = Identity::all();
        return view('registerData2', compact('identity'));
    }

    function registration_post(Request $request){
        $request->validate([
            'username' => 'required|string|unique:users',
            'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],

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
}
