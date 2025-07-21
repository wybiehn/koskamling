{{-- test komen --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/guest/dashboardstyle.css') }}">
    <title>Homepage Koskamling</title>
    <link rel="icon" href="{{ asset('img/logo-ungu.png') }}">
</head>

<body>
    <header class="header">
        <div class="header-kiri">
            <img src="{{ asset('img/koskamling-logo.png') }}" class="logo-header">
            <input type="text" class="search-bar" placeholder="Cari kos incaranmu" name="search-bar" id="search-bar">
        </div>
        <div class="header-kanan">
            <a href="#aboutus">About us</a>
            <a href="#help">Help</a>
            @auth('web')
                <a href="/logout" class="login-button">Log out</a>
            @else
                <a href="/login" class="login-button">Log in</a>
            @endauth
        </div>
    </header>

    <section class="catchphrase">
        <h1>Rekomendasi kos-kosan dengan fasilitas terbaik!</h1>
    </section>

    <div class="recomendation-wrapper">
        <div class="recomendation-top">
            @foreach ($kos as $data)
                <div class="rekomendasi-kos">
                    <a href="kos-page-notlogin.html" style="text-decoration: none;">
                        <img src="{{ Storage::url($data->image) }}" alt="Kos 1">
                        <div class="title-container">
                            <h1>{{ $data->name }}</h1>
                            <h3 class="gender">{{ $data->type }}</h3>
                        </div>
                        <div class="price-container">
                            <span class="price">{{ $data->price }}</span>
                            <span class="permonth">/bulan</span>
                        </div>
                        <p class="address">{{ $data->address }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <section class="deskripsi">
        <div class="sub-deskripsi">
            <img src="{{ asset('img/money-icon.png') }}" alt="Kos 1" width="100" height="100"
                class="logo-subdivisi">
            <h3>Harga terjangkau</h3>
            <p>Kami bekerja sama dengan berbagai penyedia kos terpercaya untuk menawarkan pilihan kos dengan harga yang
                menarik dan kompetitif.</p>
        </div>
        <div class="sub-deskripsi">
            <img src="{{ asset('img/ChatGPT Image 1 Mei 2025, 16.15.09.png') }}" alt="Kos 1" width="100"
                height="100" class="logo-subdivisi">
            <h3>Lokasi Strategis</h3>
            <p>Anda dapat memilih kos yang berlokasi strategis, dekat dengan kampus, pusat perbelanjaan, dan
                transportasi umum.</p>
        </div>
        <div class="sub-deskripsi">
            <img src="{{ asset('img/koskamling-logo.png') }}" alt="Kos 1" width="115" height="100"
                class="logo-subdivisi">
            <h3>Fasilitas lengkap</h3>
            <p>Kos-kos kami dilengkapi fasilitas terbaik seperti internet, area bersama, dan perlengkapan kamar yang
                lengkap.</p>
        </div>
    </section>

    <div class="daftar-kota">
        <h2>Ingin mencari kos-kosan di kota apa?</h2>
        <input type="radio" name="kota" id="cirebon" hidden>
        <input type="radio" name="kota" id="bandung" hidden>
        <input type="radio" name="kota" id="jakarta" hidden>
        <input type="radio" name="kota" id="surabaya" hidden>
        <input type="radio" name="kota" id="yogyakarta" hidden>
        <input type="radio" name="kota" id="purwokerto" hidden>
        <div class="kota-button">
            <label for="cirebon" class="kota-card" style="background-image: url('{{ asset('img/cirebon.jpg') }}');">
                <a href="" class="nama-kota">Kos di Cirebon</a>
            </label>
            <label for="bandung" class="kota-card" style="background-image: url('{{ asset('img/bandung.jpg') }}');">
                <a href="" class="nama-kota">Kos di Bandung</a>
            </label>
            <label for="jakarta" class="kota-card" style="background-image: url('{{ asset('img/jakarta.jpg') }}');">
                <a href="" class="nama-kota">Kos di Jakarta</a>
            </label>
            <label for="surabaya" class="kota-card" style="background-image: url('{{ asset('img/surabaya.jpg') }}');">
                <a href="" class="nama-kota">Kos di Surabaya</a>
            </label>
            <label for="yogyakarta" class="kota-card"
                style="background-image: url('{{ asset('img/yogyakarta.jpg') }}');">
                <a href="" class="nama-kota">Kos di Yogyakarta</a>
            </label>
            <label for="purwokerto" class="kota-card"
                style="background-image: url('{{ asset('img/purwokerto.jpg') }}');">
                <a href="" class="nama-kota">Kos di Purwokerto</a>
            </label>
        </div>
    </div>

    <footer class="footer">
        <img src="{{ asset('img/logo-ungu.png') }}" alt="koskamling-logo" width="150">
        <div>
            <h2>Kebijakan</h2>
            <a href="#" class="footer-text">Kebijakan Privasi</a>
            <a href="#" class="footer-text">Syarat dan Ketentuan</a>
        </div>
        <div>
            <h2>Hubungi kami</h2>
            <a href="#" class="footer-text">Email</a>
            <a href="#" class="footer-text">WhatsApp</a>
        </div>
    </footer>
</body>

</html>
