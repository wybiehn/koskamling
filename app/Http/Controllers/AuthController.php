<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect('/dashboard')->with('success', 'Login successful');
            
        } else {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }
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
        return redirect('login')->with('success', 'Registration successful. Please login.')   ;
    }
    public function logout(Request $request)
    {
        // Logic for user logout
        Auth::logout();
        return redirect('/guest')->with('success', 'Logout successful');
    }
}
