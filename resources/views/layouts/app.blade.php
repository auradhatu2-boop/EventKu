<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>EventKu</title>
    <style>
        body{font-family: sans-serif; max-width: 900px;margin:24px auto;padding:0 16px;color:#12a2a44}
        a{color:#2a5c8a} .btn{background:#2a5c8a;color:#fff;padding:8px 14px;border:0;border-radius:6px;cursor:pointer;text-decoration:none}
        .card{border: 1px solid #cfd8e6;border-radius:8px;padding:12px;margin-bottom:12px}
        input,select,textarea{width:100px;padding:7px;margin:4px 0 10px;box-sizing:border-box}
        .err{color:#b3261e;font-size:13px}
        .ok{background:#dcf1e3;padding:8px;border-radius:6px}
    </style>
</head>
<body>
    <h2><a href="{{ route('vendor.index') }}" style="text-decoration:none">EventKu</a></h2>
    @if(session('sukses')) <p class="ok">{{ session('sukses') }}</p> @endif
    @yield('isi')
</body>
</html>