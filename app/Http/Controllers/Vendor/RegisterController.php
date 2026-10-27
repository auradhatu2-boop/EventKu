<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\KategoriJasa;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        $kategori = KategoriJasa::where('status_aktif', true)->get();
        return view('vendor.auth.register', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_usaha' => 'required|string|max:100',
            'id_kategori' => 'required|exists:kategori_jasa,id_kategori',
            'deskripsi_usaha' => 'nullable|string',
            'kota' => 'required|string|max:50',
            'no_telp' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:vendor,email',
            'password' => 'required|min:8|confirmed',
            'nama_bank' => 'required|string|max:30',
            'no_rekening' => 'required|string|max:30',
            'atas_nama_rekening' => 'required|string|max:100',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['status_aktif'] = true;

        $vendor = Vendor::create($data);
        Auth::guard('vendor')->login($vendor);

        return redirect()->route('vendor.index')
            ->with('sukses', 'Pendaftaran berhasil. Akun vendor sudah aktif.');
    }
}