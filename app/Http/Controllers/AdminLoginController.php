<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Menampilkan halaman login admin.
     */
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan view ini ada
    }

    /**
     * Proses login admin.
     */
    public function login(Request $request)
    {
        Log::info('Login attempt:', $request->only('email', 'password'));
        // Validasi input dari form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        session(['admin_logged_in' => true]);
        // Login manual tanpa hash
        $adminEmail = 'admin@gmail.com';
        $adminPassword = 'admin1234';
    
        // Periksa apakah email dan password sesuai
        if ($request->email === $adminEmail && $request->password === $adminPassword) {
            // Simpan sesi admin
            session(['admin_logged_in' => true]);
    
            // Redirect ke dashboard admin
            return redirect()->route('admin.dashboard');
        }
    
        // Jika login gagal, kembali dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }
    /**
     * Logout admin.
     */
    public function logout(Request $request)
    {
        // Hapus session admin
        $request->session()->forget('admin_logged_in');
        $request->session()->invalidate();

        return redirect('/admin/login')->with('status', 'Logout berhasil.');
    }
}