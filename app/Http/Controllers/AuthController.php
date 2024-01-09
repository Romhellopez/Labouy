<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login()
    {   
        if(View::exists('auth.login'))
        { 
            return view('auth.login');
        } else {
            return abort(404);
        }
    }
    public function process(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required|min:6'
        ]);

        if(auth()->attempt($validated))
        {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'welcome back!');
        }

        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
    }
    public function register()
    {
            return view('auth.register');
    }  
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            "name" => ['required', 'min:6'],
            "email" => ['required', 'email', Rule::unique('users','email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        // dd($user);

        auth()->login($user);

        return redirect('/login')->with('success-login', 'message');
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout successfully');
    }
    // /-------------------------------------------------------------------
    // /-------------------------------------------------------------------
    
}
