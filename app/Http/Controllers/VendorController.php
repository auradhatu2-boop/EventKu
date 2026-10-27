<?php

namespace App\Http\Controllers;

use App\Models\KategoriJasa;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(Request $request)
    {
        $vendors = Vendor::with('kategori')
            ->withMin('paketLayanan', 'harga')
            ->where('status_aktif', true)
            ->when($request->kategori, fn ($q, $k) => $q->where('id_kategori', $k))
            ->when($request->kota, fn ($q, $k) => $q->where('kota', 'like', "%$k%"))
            ->get();

        $kategoriJasas = KategoriJasa::where('status_aktif', true)->get();
        return view('vendor.index', compact('vendors', 'kategoriJasas'));
    }
}
