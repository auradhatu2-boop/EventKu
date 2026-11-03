<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EventKu — Temukan Vendor Terbaik untuk Acaramu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{
            --brand:#2b5f8e; --brand-dark:#1f4b78; --ink:#14233b; --muted:#6b7a90;
            --line:#e3e8ef; --soft:#e6edf6; --bg:#f6f8fb;
        }
        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}
        body{font-family:'Plus Jakarta Sans',system-ui,sans-serif;color:var(--ink);background:#fff}
        a{color:inherit;text-decoration:none}
        .wrap{max-width:1120px;margin:0 auto;padding:0 24px}

        /* Navbar */
        .nav{position:sticky;top:0;z-index:20;background:#fff;border-bottom:1px solid var(--line)}
        .nav .wrap{display:flex;align-items:center;justify-content:space-between;height:64px;gap:16px}
        .logo{font-weight:800;font-size:19px;color:var(--brand-dark)}
        .menu{display:flex;gap:28px;font-size:13px;font-weight:600;color:var(--brand)}
        .menu a:hover{color:var(--brand-dark)}
        .aksi{display:flex;align-items:center;gap:10px;font-size:13px;font-weight:700}
        .btn{display:inline-flex;align-items:center;justify-content:center;height:38px;padding:0 20px;border-radius:9px;border:2px solid var(--brand-dark);font:inherit;font-size:13px;font-weight:700;cursor:pointer}
        .btn-outline{background:#fff;color:var(--brand-dark)}
        .btn-fill{background:var(--brand-dark);color:#fff}
        .btn-fill:hover{background:#183d62}
        .sapa{color:var(--muted);font-weight:600}
        .aksi form{display:inline}

        /* Hero */
        .hero{background:var(--brand);color:#fff;padding:56px 0 64px}
        .hero h1{font-size:36px;line-height:1.2;font-weight:800;max-width:640px;letter-spacing:-.4px}
        .hero p{margin-top:12px;font-size:15px;color:#dbe7f3}
        .cari{margin-top:28px;background:#fff;border-radius:16px;padding:10px;display:flex;gap:10px;max-width:860px;box-shadow:0 10px 30px rgba(15,27,61,.18)}
        .cari select,.cari input{flex:1;min-width:0;height:52px;border:0;border-radius:10px;background:var(--soft);padding:0 16px;font:inherit;font-size:13px;color:var(--ink);outline:none}
        .cari select:focus,.cari input:focus{box-shadow:0 0 0 2px var(--brand)}
        .cari button{height:52px;padding:0 32px;border:0;border-radius:10px;background:var(--brand-dark);color:#fff;font:inherit;font-size:14px;font-weight:700;cursor:pointer}
        .cari button:hover{background:#183d62}

        /* Section */
        section{padding:48px 0}
        .alt{background:var(--bg)}
        h2.judul{font-size:20px;font-weight:800;margin-bottom:6px}
        .ket{font-size:13px;color:var(--muted);margin-bottom:22px}

        /* Kategori */
        .kategori{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
        .kategori a{background:var(--soft);border-radius:12px;padding:20px 12px;text-align:center;font-size:13px;font-weight:700;transition:.15s}
        .kategori a:hover{background:#d6e3f1;transform:translateY(-2px)}

        /* Cara kerja */
        .langkah{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
        .langkah .kartu{background:#fff;border:1px solid var(--line);border-radius:12px;padding:18px}
        .nomor{width:28px;height:28px;border-radius:50%;background:var(--brand-dark);color:#fff;font-size:13px;font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:12px}
        .kartu h3{font-size:14px;font-weight:700;margin-bottom:6px}
        .kartu p{font-size:12.5px;line-height:1.6;color:var(--muted)}

        /* Vendor populer */
        .vendor{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
        .vendor a{background:#fff;border:1px solid var(--line);border-radius:12px;overflow:hidden;transition:.15s}
        .vendor a:hover{box-shadow:0 8px 20px rgba(20,35,59,.1);transform:translateY(-2px)}
        .foto{height:120px;background:linear-gradient(135deg,#cfdff0,#e6edf6)}
        .vendor .isi{padding:14px}
        .tag{display:inline-block;font-size:11px;font-weight:700;color:var(--brand);background:var(--soft);padding:3px 9px;border-radius:20px}
        .vendor h3{font-size:14px;font-weight:700;margin:10px 0 4px}
        .vendor .kota{font-size:12px;color:var(--muted)}
        .vendor .harga{margin-top:10px;font-size:12px;color:var(--muted)}
        .vendor .harga b{color:var(--ink);font-size:13px}
        .lihat{margin-top:22px;text-align:center}

        /* Keunggulan */
        .unggul{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
        .unggul .kartu{background:#fff;border:1px solid var(--line);border-radius:12px;padding:20px}
        .ikon{width:38px;height:38px;border-radius:10px;background:var(--soft);color:var(--brand-dark);display:flex;align-items:center;justify-content:center;margin-bottom:12px}

        /* CTA vendor */
        .cta{background:var(--brand);color:#fff;border-radius:18px;padding:36px;display:flex;align-items:center;justify-content:space-between;gap:24px}
        .cta h2{font-size:22px;font-weight:800}
        .cta p{margin-top:8px;font-size:13.5px;color:#dbe7f3;max-width:520px;line-height:1.6}
        .cta .btn{background:#fff;color:var(--brand-dark);border-color:#fff;white-space:nowrap}

        /* Footer */
        footer{border-top:1px solid var(--line);padding:32px 0;font-size:12.5px;color:var(--muted)}
        footer .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
        footer .links{display:flex;gap:20px;font-weight:600}

        @media(max-width:900px){
            .menu{display:none}
            .kategori,.langkah,.vendor,.unggul{grid-template-columns:repeat(2,1fr)}
            .cari{flex-direction:column}
            .cta{flex-direction:column;align-items:flex-start}
            .hero h1{font-size:28px}
        }
        @media(max-width:520px){
            .kategori,.langkah,.vendor,.unggul{grid-template-columns:1fr}
        }
    </style>
</head>
<body>

{{-- NAVBAR --}}
<header class="nav">
    <div class="wrap">
        <a href="{{ url('/') }}" class="logo">EventKu</a>

        <nav class="menu">
            <a href="{{ route('vendor.index') }}">Cari Vendor</a>
            <a href="#kategori">Kategori</a>
            <a href="#cara-kerja">Cara Kerja</a>
            <a href="{{ route('vendor.register') }}">Jadi Vendor</a>
        </nav>

        <div class="aksi">
            @auth
                <span class="sapa">Halo, {{ \Illuminate\Support\Str::words(auth()->user()->name, 1, '') }}</span>
                <form method="POST" action="{{ route('keluar') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline">Keluar</button>
                </form>
            @else
                <a href="{{ route('masuk') }}" class="btn btn-outline">Masuk</a>
                <a href="{{ route('daftar') }}" class="btn btn-fill">Daftar</a>
            @endauth
        </div>
    </div>
</header>

{{-- HERO + PENCARIAN --}}
<div class="hero">
    <div class="wrap">
        <h1>Temukan vendor terbaik untuk acara impianmu</h1>
        <p>Pilih, pesan, dan bayar aman lewat satu platform.</p>

        {{-- Kirim ke daftar vendor: ?kategori=...&tanggal=... --}}
        <form class="cari" method="GET" action="{{ route('vendor.index') }}">
            <select name="kategori" aria-label="Kategori jasa">
                <option value="">Kategori jasa</option>
                <option value="mua">MUA</option>
                <option value="catering">Catering</option>
                <option value="fotografi">Fotografi</option>
                <option value="mc-hiburan">MC &amp; Hiburan</option>
            </select>
            <input type="date" name="tanggal" min="{{ now()->toDateString() }}" aria-label="Tanggal acara">
            <button type="submit">Cari Vendor</button>
        </form>
    </div>
</div>

{{-- KATEGORI --}}
<section id="kategori">
    <div class="wrap">
        <h2 class="judul">Kategori Jasa</h2>
        <p class="ket">Pilih jenis jasa yang kamu butuhkan untuk acaramu.</p>
        <div class="kategori">
            <a href="{{ route('vendor.index', ['kategori' => 'mua']) }}">MUA</a>
            <a href="{{ route('vendor.index', ['kategori' => 'catering']) }}">Catering</a>
            <a href="{{ route('vendor.index', ['kategori' => 'fotografi']) }}">Fotografi</a>
            <a href="{{ route('vendor.index', ['kategori' => 'mc-hiburan']) }}">MC &amp; Hiburan</a>
        </div>
    </div>
</section>

{{-- CARA KERJA --}}
<section id="cara-kerja" class="alt">
    <div class="wrap">
        <h2 class="judul">Cara Kerja</h2>
        <p class="ket">Empat langkah dari mencari vendor sampai acaramu selesai.</p>
        <div class="langkah">
            <div class="kartu">
                <div class="nomor">1</div>
                <h3>Pilih paket</h3>
                <p>Bandingkan vendor, portofolio, dan harga, lalu cari yang tersedia di tanggal acaramu.</p>
            </div>
            <div class="kartu">
                <div class="nomor">2</div>
                <h3>Ajukan pesanan</h3>
                <p>Vendor konfirmasi sesuai jadwal. Satu acara bisa memesan beberapa vendor sekaligus.</p>
            </div>
            <div class="kartu">
                <div class="nomor">3</div>
                <h3>Bayar DP aman</h3>
                <p>Dana ditahan platform (escrow) dan baru diteruskan ke vendor setelah acara berjalan.</p>
            </div>
            <div class="kartu">
                <div class="nomor">4</div>
                <h3>Acara &amp; Ulasan</h3>
                <p>Lunasi, nikmati acaramu, lalu beri ulasan untuk membantu pelanggan lain.</p>
            </div>
        </div>
    </div>
</section>

{{-- VENDOR POPULER --}}
@php
    // CONTOH data statis. Ganti dengan data dari database, misalnya:
    // $vendorPopuler = \App\Models\Vendor::latest()->take(4)->get();
    $vendorPopuler = [
        ['id' => 1, 'nama' => 'Nama Vendor 1', 'kategori' => 'MUA',          'kota' => 'Banyuwangi', 'harga' => 'Rp 1.500.000'],
        ['id' => 2, 'nama' => 'Nama Vendor 2', 'kategori' => 'Catering',     'kota' => 'Banyuwangi', 'harga' => 'Rp 35.000 / porsi'],
        ['id' => 3, 'nama' => 'Nama Vendor 3', 'kategori' => 'Fotografi',    'kota' => 'Banyuwangi', 'harga' => 'Rp 2.000.000'],
        ['id' => 4, 'nama' => 'Nama Vendor 4', 'kategori' => 'MC & Hiburan', 'kota' => 'Banyuwangi', 'harga' => 'Rp 1.200.000'],
    ];
@endphp
<section>
    <div class="wrap">
        <h2 class="judul">Vendor Pilihan</h2>
        <p class="ket">Beberapa vendor yang siap membantu acaramu.</p>
        <div class="vendor">
            @foreach ($vendorPopuler as $v)
                <a href="{{ route('vendor.show', $v['id']) }}">
                    <div class="foto"></div>
                    <div class="isi">
                        <span class="tag">{{ $v['kategori'] }}</span>
                        <h3>{{ $v['nama'] }}</h3>
                        <div class="kota">{{ $v['kota'] }}</div>
                        <div class="harga">Mulai dari <b>{{ $v['harga'] }}</b></div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="lihat">
            <a href="{{ route('vendor.index') }}" class="btn btn-outline">Lihat semua vendor</a>
        </div>
    </div>
</section>

{{-- KENAPA EVENTKU --}}
<section class="alt">
    <div class="wrap">
        <h2 class="judul">Kenapa EventKu?</h2>
        <p class="ket">Dirancang agar memesan jasa acara jadi lebih mudah dan tenang.</p>
        <div class="unggul">
            <div class="kartu">
                <div class="ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/></svg>
                </div>
                <h3>Dana aman dengan escrow</h3>
                <p>Pembayaranmu ditahan platform dan baru diteruskan ke vendor, jadi lebih terlindungi.</p>
            </div>
            <div class="kartu">
                <div class="ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 9h18M8 2v4M16 2v4"/></svg>
                </div>
                <h3>Cek ketersediaan tanggal</h3>
                <p>Pilih tanggal acara dan langsung lihat vendor yang masih tersedia.</p>
            </div>
            <div class="kartu">
                <div class="ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16M4 12h16M4 17h10"/></svg>
                </div>
                <h3>Banyak vendor, satu transaksi</h3>
                <p>Pesan MUA, catering, fotografi, dan lainnya dalam satu acara dengan satu kali pembayaran.</p>
            </div>
            <div class="kartu">
                <div class="ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v4l3 2"/><circle cx="12" cy="12" r="9"/></svg>
                </div>
                <h3>Pengingat pembayaran</h3>
                <p>Notifikasi otomatis untuk DP dan pelunasan, supaya tidak ada yang terlewat.</p>
            </div>
        </div>
    </div>
</section>

{{-- AJAKAN JADI VENDOR --}}
<section>
    <div class="wrap">
        <div class="cta">
            <div>
                <h2>Punya usaha jasa acara?</h2>
                <p>Daftar sebagai vendor, tampilkan layananmu, dan terima pesanan langsung dari pelanggan. Pendaftaran gratis dan langsung aktif.</p>
            </div>
            <a href="{{ route('vendor.register') }}" class="btn">Jadi Vendor</a>
        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer>
    <div class="wrap">
        <div>
            <strong style="color:var(--brand-dark)">EventKu</strong><br>
            Platform pemesanan jasa acara multi-vendor.
        </div>
        <div class="links">
            <a href="{{ route('vendor.index') }}">Cari Vendor</a>
            <a href="#cara-kerja">Cara Kerja</a>
            <a href="{{ route('vendor.register') }}">Jadi Vendor</a>
        </div>
        <div>&copy; {{ date('Y') }} EventKu</div>
    </div>
</footer>

</body>
</html>