<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="dashboardstyle.css"> --}}
    <title>Dashboard Admin</title>
    <link rel="icon" href="/Koskamling/img/koskamling-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/guest/dashboardstyle.css') }}">
</head>

<body>
    <header class="header">
        <div class="header-kiri">
            <img src="{{ asset('img/koskamling-logo.png') }}" class="logo-header">
        </div>
        <div class="header-kanan">
            <a href="#aboutus">About us</a>
            <a href="#help">Help</a>
            <a href="{{ route('logout') }}" class="login-button">Log out</a>
        </div>
    </header>

    <div class="container">
        AWAWE

        <section class="question">
            <h2>Apa yang Ingin anda lakukan hari ini?</h2>
        </section>



        <div class="statistik">
            <h1>Daftar Kos</h1>
        </div>
        <a href="{{ route('kos.create') }}" class="btn btn-primary">Tambah Kos</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kos</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Harga/bulan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kos as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->name }}</td>
                            <td>{{ $k->type }}</td>
                            <td>Rp. {{ number_format($k->price, 0, ',', '.') }}</td>
                            <td>{{ $k->address }}, {{ $k->city }}</td>
                            <td>
                                <a href="{{ route('kos.edit', $k->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('kos.destroy', $k->id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
