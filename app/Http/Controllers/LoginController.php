<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('masuk');
    }

    public function proses(Request $request)
    {
        $data = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
            'peran'    => ['required', 'in:pelanggan,vendor,admin'],
        ]);

        $berhasil = Auth::attempt(
            ['email' => $data['email'], 'password' => $data['password'], 'role' => $data['peran']],
            $request->boolean('ingat')
        );

        if (! $berhasil) {
            // Pesan sengaja sama, supaya tidak membocorkan akun mana yang ada
            return back()->withErrors(['email' => 'Email atau password salah.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(match ($data['peran']) {
            'admin'  => '/admin',
            'vendor' => '/vendors',   // ganti ke dashboard vendor kalau sudah ada
            default  => '/',
        });
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('masuk');
    }
}