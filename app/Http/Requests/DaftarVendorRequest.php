<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class DaftarVendorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => ['required', 'string', 'max:120'],
            'email'    => ['required', 'email:rfc', 'max:150', 'unique:users,email'],
            'phone'    => ['required', 'regex:/^(\+62|62|0)8[0-9]{8,12}$/', 'unique:users,phone'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
            'terms'    => ['accepted'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'      => 'Nama usaha wajib diisi.',
            'email.required'     => 'Email wajib diisi.',
            'email.email'        => 'Format email tidak valid.',
            'email.unique'       => 'Email sudah terdaftar.',
            'phone.required'     => 'No. WhatsApp wajib diisi.',
            'phone.regex'        => 'Gunakan format nomor Indonesia, contoh 081234567890.',
            'phone.unique'       => 'No. WhatsApp sudah terdaftar.',
            'password.required'  => 'Password wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min'       => 'Password minimal 8 karakter.',
            'terms.accepted'     => 'Kamu harus menyetujui Syarat & Ketentuan.',
        ];
    }
}