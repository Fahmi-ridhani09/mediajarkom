<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba autentikasi
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            $request->session()->regenerate();
            if (Auth::user()->role == 'guru') { 
                return redirect()->route('guru.dashboard');
            }
            return redirect()->route('home');
        }

        // Jika gagal
        return redirect()->route('login')->with("pesan", "Email & Password anda salah!");
    }

    public function register(Request $request)
    {

        //dd($request->all()); 
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'kelas' => 'required|string|max:100',
            'password' => 'required|string|min:6'
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'kelas.required' => 'Kelas wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.'
        ]);

        // Simpan user baru ke database
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kelas' => $request->kelas,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah registrasi
        Auth::login($user);

        // Redirect ke halaman utama
        return redirect()->route('home')->with('pesan', 'Registrasi berhasil! Selamat datang, ' . $user->nama . '!');
    }

    public function logout(){
        Auth::logout(); // Logout user
        return redirect()->route('login')->with('pesan', 'Anda berhasil logout.');
    }
}
