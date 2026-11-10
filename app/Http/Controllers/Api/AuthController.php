<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validasi data yang dikirim dari Postman
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_whatsapp' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // 2. Simpan data ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_whatsapp' => $request->no_whatsapp,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // 3. Berikan respons sukses
        return response()->json([
            'success' => true,
            'message' => 'Registrasi Berhasil',
            'data' => $user
        ], 201);
    }
}