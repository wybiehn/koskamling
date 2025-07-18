<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="dashboardstyle.css"> --}}
    <title>Dashboard Admin</title>
    <link rel="icon" href="/Koskamling/img/koskamling-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/guest/dashboardstyle.css') }}">  
  </head>

<body ">
    <header class="header">
        <div class="header-kiri">
            <img src="/Koskamling//img/koskamling-logo.png" alt="koskamling-logo" class="logo-header">
        </div>
        <div class="header-kanan">
            <a href="#aboutus">About us</a>
            <a href="#help">Help</a>
            <a href="" class="login-button">Log out</a>
        </div>
    </header>

<div class="container">


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
                    <th scope="col">Harga</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
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
                    
                    <td><a href="/admin/kos/{{ $k->id }}/edit" class="btn btn-primary">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    


    
    </div>

    <footer class="footer">
        <img src="/Koskamling/img/ChatGPT Image 1 Mei 2025, 15.59.11.png" alt="koskamling-logo" class="logo-footer">
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