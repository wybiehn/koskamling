<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController
{
    //
    public function login(Request $request)
    {
        // Logic for user login
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            return redirect()->route('kos.index')->with('success', 'Login successful');
        } else {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }
    }
    public function forgotPassword()
    {
        // Logic to show the forgot password form
        return view('guest.form-forgotpassword');
    }
    public function register(Request $request)
    {
        // Logic for user registration
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);



        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // return response()->json([
        //     'message' => 'Registration successful',
        //     'user' => $user,
        // ]);
        return redirect('login')->with('success', 'Registration successful. Please login.');
    }
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful');
    }
}
