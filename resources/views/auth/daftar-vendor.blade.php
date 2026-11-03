<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Vendor — EventKu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{
            --brand:#2b5f8e; --brand-dark:#1f4b78; --ink:#0f1b3d; --muted:#8a97ab;
            --line:#dce3ec; --soft:#e6edf6; --danger:#d64545;
        }
        *{box-sizing:border-box;margin:0;padding:0}
        body{font-family:'Plus Jakarta Sans',system-ui,sans-serif;color:var(--ink);background:#fff}
        .page{display:grid;grid-template-columns:1fr 1fr;min-height:100vh}

        .side{background:var(--brand);color:#fff;padding:40px;display:flex;flex-direction:column}
        .brand{font-weight:700;font-size:18px}
        .hero{margin-top:60px}
        .hero h1{font-size:28px;font-weight:700;letter-spacing:-.3px}
        .hero p{margin-top:10px;font-size:14px;line-height:1.6;max-width:320px;opacity:.95}
        .side-foot{margin-top:auto;font-size:13px;line-height:1.9}

        .main{display:flex;align-items:center;justify-content:center;padding:40px 24px}
        .card{width:100%;max-width:420px}
        .card h2{font-size:22px;font-weight:700}
        .sub{margin-top:4px;font-size:13px;color:var(--muted)}
        .badge{margin-top:20px;display:flex;background:var(--soft);border-radius:12px;padding:6px}
        .badge span{flex:1;text-align:center;background:#fff;border-radius:9px;padding:9px;font-size:13px;font-weight:600;box-shadow:0 1px 3px rgba(15,27,61,.1)}

        form{margin-top:22px}
        .field{margin-bottom:16px}
        .field label{display:block;font-size:13px;font-weight:700;margin-bottom:8px}
        .input{position:relative}
        .input input{width:100%;height:44px;border:1px solid var(--line);border-radius:10px;padding:0 14px;font:inherit;font-size:13px;color:var(--ink);outline:none;transition:.15s}
        .input input::placeholder{color:var(--muted)}
        .input input:focus{border-color:var(--brand);box-shadow:0 0 0 3px rgba(43,95,142,.12)}
        .input input.is-error{border-color:var(--danger)}
        .toggle{position:absolute;right:14px;top:50%;transform:translateY(-50%);background:none;border:0;font:inherit;font-size:12px;color:var(--muted);cursor:pointer}
        .has-toggle input{padding-right:84px}
        .error{margin-top:6px;font-size:12px;color:var(--danger)}

        .terms{display:flex;gap:8px;align-items:flex-start;font-size:12px;color:#4a566b;line-height:1.5;margin:4px 0 18px}
        .terms input{margin-top:2px;accent-color:var(--brand-dark)}
        .terms a{color:var(--ink);font-weight:700;text-decoration:none}

        .btn{width:100%;height:46px;border:0;border-radius:10px;background:var(--brand-dark);color:#fff;font:inherit;font-size:13px;font-weight:700;cursor:pointer;box-shadow:0 6px 14px rgba(31,75,120,.25);transition:.15s}
        .btn:hover{background:#183d62}
        .or{text-align:center;font-size:11px;color:var(--muted);margin:12px 0}
        .btn-google{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;height:44px;border:1px solid var(--line);border-radius:10px;background:#fff;font:inherit;font-size:13px;font-weight:600;color:var(--ink);text-decoration:none}
        .btn-google:hover{background:#f7f9fc}
        .alt{text-align:center;font-size:12px;color:var(--muted);margin-top:20px}
        .alt a{color:var(--ink);font-weight:700;text-decoration:none}

        @media (max-width:900px){
            .page{grid-template-columns:1fr}
            .side{display:none}
        }
    </style>
</head>
<body>
<div class="page">
    <aside class="side">
        <div class="brand">EventKu</div>
        <div class="hero">
            <h1>Bergabung Sebagai Vendor</h1>
            <p>Tampilkan jasamu, terima pesanan dari pelanggan, dan kelola jadwal serta pembayaran dalam satu tempat.</p>
        </div>
        <div class="side-foot">
            <div>Dana aman dengan escrow</div>
            <div>Pesanan langsung dari pelanggan</div>
        </div>
    </aside>

    <main class="main">
        <div class="card">
            <h2>Daftar</h2>
            <p class="sub">Buat akun vendor untuk mulai menerima pesanan</p>

            <div class="badge"><span>Vendor</span></div>

            <form method="POST" action="{{ route('vendor.daftar.store') }}" novalidate>
                @csrf

                <div class="field">
                    <label for="name">Nama usaha</label>
                    <div class="input">
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                               placeholder="Nama usaha / brand kamu" autocomplete="name"
                               class="{{ $errors->has('name') ? 'is-error' : '' }}" required>
                    </div>
                    @error('name')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <div class="input">
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               placeholder="nama@email.com" autocomplete="email"
                               class="{{ $errors->has('email') ? 'is-error' : '' }}" required>
                    </div>
                    @error('email')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="phone">No. WhatsApp</label>
                    <div class="input">
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                               placeholder="08xxxxxxxxxx" autocomplete="tel"
                               class="{{ $errors->has('phone') ? 'is-error' : '' }}" required>
                    </div>
                    @error('phone')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="input has-toggle">
                        <input type="password" id="password" name="password"
                               placeholder="Minimal 8 karakter" autocomplete="new-password"
                               class="{{ $errors->has('password') ? 'is-error' : '' }}" required>
                        <button type="button" class="toggle" data-target="password">Lihat</button>
                    </div>
                    @error('password')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="password_confirmation">Konfirmasi password</label>
                    <div class="input has-toggle">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               placeholder="Ulangi password" autocomplete="new-password" required>
                        <button type="button" class="toggle" data-target="password_confirmation">Lihat</button>
                    </div>
                </div>

                <label class="terms">
                    <input type="checkbox" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required>
                    <span>Saya menyetujui <a href="#">Syarat &amp; Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> EventKu.</span>
                </label>
                @error('terms')<div class="error" style="margin:-12px 0 16px">{{ $message }}</div>@enderror

                <button type="submit" class="btn">Daftar sebagai vendor</button>
            </form>

            <p class="sub" style="text-align:center;margin-top:14px">Profil usaha, portofolio, dan rekening dilengkapi setelah masuk.</p>

            <p class="alt">Sudah punya akun? <a href="{{ url('/masuk') }}">Masuk</a></p>
        </div>
    </main>
</div>

<script>
    document.querySelectorAll('.toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const input = document.getElementById(btn.dataset.target);
            const show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            btn.textContent = show ? 'Sembunyikan' : 'Lihat';
        });
    });
</script>
</body>
</html>