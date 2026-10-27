@extends('layouts.app')
@section('isi')
<h3>Daftar Vendor</h3>
<form method="GET" style="display:flex;gap:8px">
  <select name="kategori">
    <option value="">Semua kategori</option>
    @foreach($kategori as $k)
      <option value="{{ $k->id_kategori }}" @selected(request('kategori') == $k->id_kategori)>{{ $k->nama_kategori }}</option>
    @endforeach
  </select>
  <input name="kota" placeholder="Kota" value="{{ request('kota') }}">
  <button class="btn">Cari</button>
</form>

@forelse($vendors as $v)
  <div class="card">
    <b>{{ $v->nama_usaha }}</b> · {{ $v->kategori->nama_kategori }} · {{ $v->kota }}<br>
    Mulai Rp {{ number_format($v->paket_layanan_min_harga ?? 0, 0, ',', '.') }}<br><br>
    <a class="btn" href="{{ route('vendor.show', $v->id_vendor) }}">Lihat</a>
  </div>
@empty
  <p>Belum ada vendor yang cocok.</p>
@endforelse

<p><a href="{{ route('vendor.register') }}">Daftar sebagai vendor</a></p>
@endsection