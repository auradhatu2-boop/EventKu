<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - EventKu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --biru-panel: #2b5f8e;
            --biru-tombol: #1f4b78;
            --biru-tab: #e5edf6;
            --teks: #14233b;
            --teks-redup: #7a8699;
            --garis: #e3e8ef;
            --latar: #ffffff;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            color: var(--teks);
            background: var(--latar);
            min-height: 100vh;
        }
        .halaman { display: grid; grid-template-columns: 1fr 1fr; min-height: 100vh; }

        /* Panel kiri */
        .panel {
            background: var(--biru-panel);
            color: #fff;
            padding: 36px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .brand { font-weight: 700; font-size: 17px; }
        .panel h1 { font-size: 26px; font-weight: 700; margin: 56px 0 10px; }
        .panel p { font-size: 13px; line-height: 1.6; max-width: 330px; color: #e3ecf6; }
        .jaminan { list-style: none; font-size: 12px; color: #dbe7f3; display: grid; gap: 8px; }

        /* Sisi form */
        .sisi-form { display: flex; align-items: center; justify-content: center; padding: 40px 24px; }
        .kotak { width: 100%; max-width: 420px; }
        .kotak h2 { font-size: 22px; font-weight: 700; }
        .sub { font-size: 13px; color: var(--teks-redup); margin: 6px 0 20px; }

        .tab {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            background: var(--biru-tab);
            border-radius: 12px;
            padding: 5px;
            margin-bottom: 26px;
        }
        .tab button {
            border: 0;
            background: transparent;
            font: inherit;
            font-size: 13px;
            font-weight: 600;
            color: #3d6a99;
            padding: 10px 0;
            border-radius: 9px;
            cursor: pointer;
        }
        .tab button[aria-selected="true"] {
            background: #fff;
            color: var(--teks);
            box-shadow: 0 1px 4px rgba(20, 35, 59, .12);
        }

        label.judul { display: block; font-size: 13px; font-weight: 700; margin-bottom: 8px; }
        .kolom { margin-bottom: 18px; }
        .input, .input-sandi {
            width: 100%;
            border: 1px solid var(--garis);
            border-radius: 10px;
            padding: 13px 14px;
            font: inherit;
            font-size: 13px;
            color: var(--teks);
            background: #fff;
        }
        .input::placeholder, .input-sandi input::placeholder { color: #a3adbb; }
        .input:focus, .input-sandi:focus-within { outline: 2px solid var(--biru-panel); outline-offset: 1px; }
        .input-sandi { display: flex; align-items: center; gap: 8px; padding: 0 14px; }
        .input-sandi input { flex: 1; border: 0; outline: 0; font: inherit; font-size: 13px; padding: 13px 0; background: transparent; color: var(--teks); }
        .lihat { border: 0; background: transparent; font: inherit; font-size: 12px; color: var(--teks-redup); cursor: pointer; }

        .baris { display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; font-size: 12px; }
        .ingat { display: flex; align-items: center; gap: 8px; color: #55617a; }
        .ingat input { width: 14px; height: 14px; }
        .lupa { color: var(--biru-tombol); font-weight: 700; text-decoration: none; font-size: 13px; }

        .tombol-utama {
            width: 100%;
            border: 0;
            background: var(--biru-tombol);
            color: #fff;
            font: inherit;
            font-size: 13px;
            font-weight: 700;
            padding: 14px;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(31, 75, 120, .25);
        }
        .tombol-utama:hover { background: #193e64; }

        .atau { text-align: center; font-size: 11px; color: var(--teks-redup); margin: 14px 0; }
        .tombol-google {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            border: 1px solid var(--garis);
            background: #fff;
            font: inherit;
            font-size: 13px;
            font-weight: 700;
            padding: 13px;
            border-radius: 10px;
            color: var(--teks);
            text-decoration: none;
            cursor: pointer;
        }
        .tombol-google:hover { background: #f6f8fb; }

        .galat { background: #fdecec; color: #a12727; font-size: 12px; padding: 10px 12px; border-radius: 8px; margin-bottom: 16px; }
        .daftar { text-align: center; font-size: 12px; color: var(--teks-redup); margin-top: 20px; }
        .daftar a { color: var(--biru-tombol); font-weight: 700; text-decoration: none; }

        button:focus-visible, a:focus-visible { outline: 2px solid var(--biru-panel); outline-offset: 2px; }

        @media (max-width: 800px) {
            .halaman { grid-template-columns: 1fr; }
            .panel { padding: 24px; }
            .panel h1 { margin-top: 28px; }
            .jaminan { display: none; }
        }
    </style>
</head>
<body>
<div class="halaman">

    <aside class="panel">
        <div>
            <div class="brand">EventKu</div>
            <h1>Selamat Datang Kembali</h1>
            <p>Kelola pesanan, jadwal, dan pembayaran acaramu dalam satu tempat.</p>
        </div>
        <ul class="jaminan">
            <li>Dana aman dengan escrow</li>
            <li>Vendor terverifikasi</li>
        </ul>
    </aside>

    <main class="sisi-form">
        <div class="kotak">
            <h2>Masuk</h2>
            <p class="sub">Pilih peran lalu masuk ke akunmu</p>

            <div class="tab" role="tablist" aria-label="Pilih peran">
                <button type="button" role="tab" data-peran="pelanggan" aria-selected="true">Pelanggan</button>
                <button type="button" role="tab" data-peran="vendor" aria-selected="false">Vendor</button>
                <button type="button" role="tab" data-peran="admin" aria-selected="false">Admin</button>
            </div>

            @if ($errors->any())
                <div class="galat">{{ $errors->first() }}</div>
            @endif

            {{-- Ganti route('masuk.proses') dengan route login milikmu --}}
            <form action="{{ route('masuk.proses') }}" method="POST">
                @csrf
                <input type="hidden" name="peran" id="peran" value="pelanggan">

                <div class="kolom">
                    <label class="judul" for="email">Email</label>
                    <input class="input" type="email" id="email" name="email"
                           value="{{ old('email') }}" placeholder="nama@email.com" required>
                </div>

                <div class="kolom">
                    <label class="judul" for="password">Password</label>
                    <div class="input-sandi">
                        <input type="password" id="password" name="password"
                               placeholder="Masukkan password" required>
                        <button type="button" class="lihat" id="lihat">Lihat</button>
                    </div>
                </div>

                <div class="baris">
                    <label class="ingat">
                        <input type="checkbox" name="ingat"> Ingat saya
                    </label>
                    <a href="#" class="lupa">Lupa password?</a>
                </div>

                <button type="submit" class="tombol-utama" id="tombol-masuk">Masuk sebagai pelanggan</button>
            </form>

            <div id="blok-google">
                <p class="atau">atau</p>
                <a href="#" class="tombol-google">
                    <svg width="16" height="16" viewBox="0 0 48 48" aria-hidden="true">
                        <path fill="#EA4335" d="M24 9.5c3.5 0 6.6 1.2 9.1 3.6l6.8-6.8C35.8 2.4 30.3 0 24 0 14.6 0 6.5 5.4 2.6 13.2l7.9 6.1C12.4 13.6 17.7 9.5 24 9.5z"/>
                        <path fill="#4285F4" d="M46.5 24.5c0-1.6-.1-3.1-.4-4.5H24v9h12.7c-.6 3-2.3 5.5-4.8 7.2l7.6 5.9c4.4-4.1 7-10.1 7-17.6z"/>
                        <path fill="#FBBC05" d="M10.5 28.7A14.5 14.5 0 0 1 9.5 24c0-1.6.3-3.2.8-4.7l-7.9-6.1A24 24 0 0 0 0 24c0 3.9.9 7.5 2.6 10.8l7.9-6.1z"/>
                        <path fill="#34A853" d="M24 48c6.5 0 11.9-2.1 15.9-5.8l-7.6-5.9c-2.1 1.4-4.9 2.3-8.3 2.3-6.3 0-11.6-4.1-13.5-9.8l-7.9 6.1C6.5 42.6 14.6 48 24 48z"/>
                    </svg>
                    Lanjut dengan Google
                </a>
            </div>

            <p class="daftar" id="blok-daftar">Belum punya akun? <a href="{{ route('daftar') }}">Daftar sekarang</a></p>
    </main>
</div>

<script>
    const tab = document.querySelectorAll('.tab button');
    const inputPeran = document.getElementById('peran');
    const tombolMasuk = document.getElementById('tombol-masuk');
    const blokGoogle = document.getElementById('blok-google');
    const blokDaftar = document.getElementById('blok-daftar');

    tab.forEach(function (btn) {
        btn.addEventListener('click', function () {
            tab.forEach(function (b) { b.setAttribute('aria-selected', 'false'); });
            btn.setAttribute('aria-selected', 'true');

            const peran = btn.dataset.peran;
            inputPeran.value = peran;
            tombolMasuk.textContent = 'Masuk sebagai ' + peran;

            // Login Google dan pendaftaran mandiri hanya untuk pelanggan
            const hanyaPelanggan = peran === 'pelanggan';
            blokGoogle.style.display = hanyaPelanggan ? '' : 'none';
            blokDaftar.style.display = hanyaPelanggan ? '' : 'none';
        });
    });

    document.getElementById('lihat').addEventListener('click', function () {
        const sandi = document.getElementById('password');
        const tampil = sandi.type === 'password';
        sandi.type = tampil ? 'text' : 'password';
        this.textContent = tampil ? 'Sembunyi' : 'Lihat';
    });
</script>
</body>
</html>