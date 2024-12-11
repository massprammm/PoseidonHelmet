<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman admin
        return view('admin.index');
    }
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan ini sesuai dengan path file Blade Anda
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Cek apakah pengguna adalah admin
            if (Auth::user()->is_admin) {
                // Jika admin, redirect ke dashboard admin
                return redirect()->intended('/admin/dashboard');
            } else {
                // Jika bukan admin, logout dan kembali dengan error
                Auth::logout();
                return back()->withErrors(['email' => 'Anda tidak memiliki akses sebagai admin.']);
            }
        }

        // Jika gagal, kembali ke form dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}