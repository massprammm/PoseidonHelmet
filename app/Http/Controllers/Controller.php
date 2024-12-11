<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class AdminLoginController extends Controller
{
    /**
     * Menampilkan halaman login admin.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan view ini ada di resources/views/admin/login.blade.php
    }

    /**
     * Proses login admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input dari form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Ambil data email dan password dari input
        $credentials = $request->only('email', 'password');

        // Cek apakah kredensial valid
        if (Auth::attempt($credentials)) {
            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Redirect ke dashboard admin
            return redirect()->intended('/admin/dashboard');
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput(); // Mengembalikan input email ke form
    }

    /**
     * Logout admin dan hapus sesi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user

        // Hapus semua sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/admin/login');
    }
}