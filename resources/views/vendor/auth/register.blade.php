<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Vendor - EventKu</title>
  <style>
    *{box-sizing:border-box}
    body{margin:0;padding:32px 16px;font-family:system-ui,sans-serif;background:#eef2f8;color:#1a2a44}
    .card{max-width:640px;margin:0 auto;background:#fff;border-radius:12px;padding:28px 32px;box-shadow:0 2px 10px rgba(0,0,0,.06)}
    .brand{font-size:20px;font-weight:700;color:#2a5c8a}
    h1{font-size:22px;margin:8px 0 4px}
    .sub{color:#5a6b85;font-size:14px;margin-bottom:8px}
    .sec{font-size:13px;font-weight:600;color:#2a5c8a;margin:22px 0 8px;padding-bottom:6px;border-bottom:1px solid #e3e9f2}
    .grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
    .full{grid-column:1/-1}
    label{display:block;font-size:13px;font-weight:600;margin-bottom:4px}
    input,select,textarea{width:100%;padding:9px 11px;border:1px solid #cfd8e6;border-radius:8px;font:inherit;font-size:14px;background:#fff}
    input:focus,select:focus,textarea:focus{outline:2px solid #2a5c8a33;border-color:#2a5c8a}
    .err{color:#b3261e;font-size:12px;margin-top:3px}
    .btn{width:100%;margin-top:24px;background:#2a5c8a;color:#fff;border:0;border-radius:8px;padding:12px;font-size:15px;font-weight:600;cursor:pointer}
    .btn:hover{background:#224b71}
    @media(max-width:560px){.grid{grid-template-columns:1fr}.card{padding:20px}}
  </style>
</head>
<body>
<div class="card">
  <div class="brand">EventKu</div>
  <h1>Daftar sebagai vendor</h1>
  <div class="sub">Isi profil usahamu untuk mulai menerima pesanan</div>

  <form method="POST" action="{{ route('vendor.register') }}">
    @csrf

    <div class="sec">Profil usaha</div>
    <div class="grid">
      <div>
        <label>Nama usaha</label>
        <input name="nama_usaha" value="{{ old('nama_usaha') }}" placeholder="Aurora Decor">
        @error('nama_usaha')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div>
        <label>Kategori jasa</label>
        <select name="id_kategori">
          <option value="">Pilih kategori</option>
          @foreach($kategori as $k)
            <option value="{{ $k->id_kategori }}" @selected(old('id_kategori') == $k->id_kategori)>{{ $k->nama_kategori }}</option>
          @endforeach
        </select>
        @error('id_kategori')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div class="full">
        <label>Deskripsi usaha</label>
        <textarea name="deskripsi_usaha" rows="3" placeholder="Ceritakan layanan dan keunggulan usahamu">{{ old('deskripsi_usaha') }}</textarea>
      </div>
      <div>
        <label>Kota</label>
        <input name="kota" value="{{ old('kota') }}" placeholder="Banyuwangi">
        @error('kota')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div>
        <label>No. telepon</label>
        <input name="no_telp" value="{{ old('no_telp') }}" placeholder="08xxxxxxxxxx">
        @error('no_telp')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div class="full">
        <label>Alamat</label>
        <input name="alamat" value="{{ old('alamat') }}" placeholder="Alamat lengkap usaha">
        @error('alamat')<div class="err">{{ $message }}</div>@enderror
      </div>
    </div>

    <div class="sec">Akun</div>
    <div class="grid">
      <div class="full">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@usaha.com">
        @error('email')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" placeholder="Minimal 8 karakter">
        @error('password')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div>
        <label>Konfirmasi password</label>
        <input type="password" name="password_confirmation" placeholder="Ulangi password">
      </div>
    </div>

    <div class="sec">Rekening pencairan dana</div>
    <div class="grid">
      <div>
        <label>Nama bank</label>
        <input name="nama_bank" value="{{ old('nama_bank') }}" placeholder="BCA">
        @error('nama_bank')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div>
        <label>No. rekening</label>
        <input name="no_rekening" value="{{ old('no_rekening') }}" placeholder="1234567890">
        @error('no_rekening')<div class="err">{{ $message }}</div>@enderror
      </div>
      <div class="full">
        <label>Atas nama rekening</label>
        <input name="atas_nama_rekening" value="{{ old('atas_nama_rekening') }}" placeholder="Nama sesuai buku tabungan">
        @error('atas_nama_rekening')<div class="err">{{ $message }}</div>@enderror
      </div>
    </div>

    <button class="btn">Daftar sekarang</button>
  </form>
</div>
</body>
</html>