<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Pastikan Anda memiliki file view auth/login.blade.php
    }
    public function authenticate(Request $request)
    {
        // Validasi input username dan password
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek apakah username dan password valid untuk login
        if (Auth::attempt($credentials)) {
            // Regenerasi session setelah login berhasil
            $request->session()->regenerate();

            // Ambil role pengguna yang login
            $role = Auth::user()->role;

            // Arahkan sesuai role
            switch ($role) {
                case 'pendaftaran':
                    return redirect()->intended('/pendaftaran');
                case 'admin':
                    return redirect()->intended('/admin');
                default:
                    return redirect()->intended('/'); // fallback jika role tidak dikenali
            }
        }

        // Jika login gagal, kembali dengan pesan error
        return back()->with('loginError', 'Username atau password salah')->withInput();
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|in:Admin Gudang,Marketing,Kepala Delivery,Kurir', // Atur sesuai peran di sistemmu
            'password' => 'required',
        ]);

        User::create([
            'username' => $validated['username'],
            'phone' => $validated['phone'],
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    
    
        public function logout() {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
     
            return redirect('/login');
        }
}