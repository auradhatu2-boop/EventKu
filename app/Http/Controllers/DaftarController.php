<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaftarRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function create()
    {
        return view('auth.daftar');
    }

    public function store(DaftarRequest $request)
    {
        // Registrasi publik HANYA untuk pelanggan: role dipaksa di server,
        // tidak pernah diambil dari input form.
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
            'role'     => 'pelanggan',
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'Akun berhasil dibuat. Selamat datang di EventKu!');
    }
}