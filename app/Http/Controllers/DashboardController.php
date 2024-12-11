<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard pengguna
    public function userDashboard()
    {
        return view('home_user'); // Pastikan view ini ada di resources/views/user_dashboard.blade.php
    }

    // Dashboard admin
    public function adminDashboard()
    {
        return view('admin_dashboard'); // Pastikan view ini ada di resources/views/admin_dashboard.blade.php
    }
}