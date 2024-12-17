<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;
            
            // Redirect berdasarkan role
            switch ($role) {
                case 'Admin':
                    return redirect()->route('admin.dashboard');
                case 'Manajer Gudang':
                    return redirect()->route('manager.dashboard');
                case 'Staff Gudang':
                    return redirect()->route('staff.dashboard');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['Unauthorized role']);
            }
        }

        return redirect()->route('login')->withErrors(['Email atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
