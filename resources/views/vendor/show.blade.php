@extends('layouts.app')
@section('isi')
<h3>{{ $vendor->nama_usaha }}</h3>
<p>{{ $vendor->kategori->nama_kategori }} · {{ $vendor->kota }}<br>{{ $vendor->deskripsi_usaha }}</p>

<h4>Paket layanan</h4>
@forelse($vendor->paketLayanan as $p)
  <div class="card">
    <b>{{ $p->nama_paket }}</b> · Rp {{ number_format($p->harga, 0, ',', '.') }}<br>
    {{ $p->deskripsi }}
  </div>
@empty
  <p>Vendor ini belum menambahkan paket.</p>
@endforelse
<a href="{{ route('vendor.index') }}">Kembali</a>
@endsection