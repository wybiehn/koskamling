@extends('app')
@section('content')

    <section class="catchphrase">
        <h1>Selamat datang, Admin!</h1>
    </section>

    <section class="question">
        <h2>Apa yang Ingin anda lakukan hari ini?</h2>
    </section>

    <div class="statistik">
      <h1>Daftar Ibukos</h1>
    </div>
    <div class="daftar-property">
      <table>
        
      </table>
    </div>

    <div class="statistik">
      <h1>Daftar Pencari Kos</h1>
    </div>
    <div class="daftar-property">
      <table>
        
      </table>
    </div>

    <div class="statistik">
      <h1>Aktivitas Transasksi</h1>
    </div>
    <div class="daftar-property">
      <table>
        
      </table>
    </div>

    <div class="statistik">
      <h1>Daftar Kos</h1>
    </div>
    <div class="daftar-property">
      <table>
        
      </table>
    </div>

    <div class="statistik">
      <h1>Notifikasi</h1>
    </div>
    <div class="daftar-property">
      <table>
        
      </table>
    </div>
    

    <footer class="footer">
        <img src="{{ asset('img/LogoFooter.png') }}" alt="Logo Footer" class="logo-footer">
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
@endsection