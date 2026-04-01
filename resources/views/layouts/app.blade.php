<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal Lebaran Diki</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* CSS Tambahan untuk Navigasi Aktif */
        .nav-link {
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        /* Memberikan warna kuning jika menu sedang dibuka */
        .active {
            color: yellow !important;
            border-bottom: 2px solid yellow;
        }
        .inactive {
            color: white !important;
        }
        /* Memberikan efek hover sedikit putih terang saat kursor lewat */
        .nav-link:hover {
            color: #f1c40f !important;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jurnal Lebaran Diki</h1>
    </header>

    <nav>
        <ul>
            <li>
                <a href="{{ route('beranda') }}" 
                   class="nav-link {{ Request::is('/') ? 'active' : 'inactive' }}">
                   Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('cerita') }}" 
                   class="nav-link {{ Request::is('cerita') ? 'active' : 'inactive' }}">
                   Cerita Lebaran
                </a>
            </li>
            <li>
                <a href="{{ route('galeri') }}" 
                   class="nav-link {{ Request::is('galeri') ? 'active' : 'inactive' }}">
                   Galeri
                </a>
            </li>
            <li>
                <a href="{{ route('kontak') }}" 
                   class="nav-link {{ Request::is('kontak') ? 'active' : 'inactive' }}">
                   Hubungi Saya
                </a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Diki Kurniawan - NIM 2523052</p>
        <p>Pendidikan Teknik Informatika | UIN Sjech M. Djamil Djambek Bukittinggi</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>