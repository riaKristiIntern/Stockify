<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function redirectToDashboard()
    {
        $role = auth()->user()->role;

        switch ($role) {
            case 'Admin':
                return redirect()->route('admin.dashboard');
            case 'Manajer Gudang':
                return redirect()->route('manager.dashboard');
            case 'Staff Gudang':
                return redirect()->route('staff.dashboard');
            default:
                auth()->logout();
                return redirect()->route('login')->withErrors(['Unauthorized role.']);
        }
    }

    // Dashboard untuk Admin
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    // Dashboard untuk Manajer Gudang
    public function managerDashboard()
    {
        return view('manager.dashboard');
    }

    // Dashboard untuk Staff Gudang
    public function staffDashboard()
    {
        return view('staff.dashboard');
    }
}
