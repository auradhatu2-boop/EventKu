<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\DaftarVendorRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class VendorDaftarController extends Controller
{
    public function create()
    {
        return view('auth.daftar-vendor');
    }

    public function store(DaftarVendorRequest $request)
    {
        // Role dipaksa 'vendor' di server, tidak pernah dari input form.
        // Vendor langsung aktif tanpa verifikasi admin.
        $user = User::create([
            'name'     => $request->name, // nama usaha
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
            'role'     => 'vendor',
        ]);

        // TODO: jika ERD punya tabel profil vendor (mis. vendors),
        // buat barisnya di sini: $user->vendor()->create([...]);

        Auth::login($user);
        $request->session()->regenerate();

        $tujuan = Route::has('vendor.dashboard') ? route('vendor.dashboard') : '/';

        return redirect()->intended($tujuan)
            ->with('success', 'Akun vendor berhasil dibuat. Lengkapi profil usahamu untuk mulai menerima pesanan.');
    }
}