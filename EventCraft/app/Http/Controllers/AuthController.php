<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated=$request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role_id' => 'required',
        ]);
        $user = User::create($validated);
    }
    public function login(Request $request)
    {
        $validated=$request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return view('welcome');
        }

    }
}
