<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') · Admin Booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', -apple-system, sans-serif;
            background: #f4f5f7;
            color: #1f2733;
        }
        .admin-shell { display: flex; min-height: 100vh; }

        .sidebar {
            width: 240px;
            background: linear-gradient(180deg, #1e3a5f 0%, #16293f 100%);
            color: #fff;
            padding: 24px 18px;
            flex-shrink: 0;
        }
        .brand { display: flex; align-items: center; gap: 10px; margin-bottom: 32px; padding: 0 6px; }
        .brand-mark {
            width: 32px; height: 32px;
            background: #d8a13a;
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; color: #16293f;
        }
        .brand-name { font-weight: 800; font-size: 16px; }

        .nav-group { margin-bottom: 18px; }
        .nav-label { font-size: 11px; text-transform: uppercase; letter-spacing: .08em; color: rgba(255,255,255,.45); padding: 0 12px; margin-bottom: 8px; }
        .nav-link {
            display: flex; align-items: center; gap: 10px;
            padding: 10px 12px;
            border-radius: 9px;
            color: rgba(255,255,255,.78);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
        }
        .nav-link:hover { background: rgba(255,255,255,.08); color: #fff; }
        .nav-link.active { background: #d8a13a; color: #16293f; }

        .main { flex: 1; display: flex; flex-direction: column; min-width: 0; }
        .topbar {
            height: 64px;
            background: #fff;
            border-bottom: 1px solid #e6e8ec;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 28px;
        }
        .topbar-title { font-weight: 700; font-size: 15px; color: #16293f; }
        .topbar-user { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #4a5160; }
        .avatar { width: 32px; height: 32px; border-radius: 50%; background: #1e3a5f; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; }

        .content { padding: 32px; max-width: 1100px; width: 100%; margin: 0 auto; }
    </style>
    @yield('styles')
</head>
<body>
    <div class="admin-shell">
        <aside class="sidebar">
            <div class="brand">
                <div class="brand-mark">B</div>
                <div class="brand-name">Booking Admin</div>
            </div>
            <div class="nav-group">
                <p class="nav-label">Menu</p>
                <a href="#" class="nav-link">Dashboard</a>
                <a href="#" class="nav-link active">Kategori</a>
                <a href="#" class="nav-link">Venue</a>
                <a href="#" class="nav-link">Pemesanan</a>
                <a href="#" class="nav-link">Pengguna</a>
            </div>
        </aside>

        <div class="main">
            <header class="topbar">
                <span class="topbar-title">@yield('title')</span>
                <div class="topbar-user">
                    <span>Admin</span>
                    <div class="avatar">A</div>
                </div>
            </header>
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>
    @yield('scripts')
</body>
</html>
