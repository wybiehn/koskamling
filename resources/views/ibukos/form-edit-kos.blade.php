<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Kos</title>
    <link rel="icon" href="/Koskamling/img/koskamling-logo.png">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: linear-gradient(#643c94, #391960);
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
        }

        .form-register {
            background: white;
            width: 320px;
            padding: 30px;
            margin: 80px auto;
            border-radius: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #643c94;
            margin-bottom: 20px;
        }

        .role-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .role {
            flex: 1;
            padding: 10px;
            border: 1px solid #643c94;
            background-image: linear-gradient(#522f7e, #643c94);
            color: #ffffff;
            transition: 0.5s;
            cursor: pointer;
            border-radius: 20px;
        }

        .role:hover {
            flex: 1;
            padding: 14px;
            border: 1px solid #643c94;
            background-image: linear-gradient(rgb(228, 228, 228), white);
            color: #643c94;
            cursor: pointer;
            border-radius: 20px;
        }

        form label {
            display: block;
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #643c94;
        }

        form input {
            width: 300px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        form input:hover {
            width: 300px;
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 15px;
            transition: 0.5s;
        }

        form select {
            width: 300px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        form select:hover {
            width: 300px;
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 15px;
            transition: 0.5s;
        }

        .checkbox-con {
            display: flex;
            gap: 50px;
            border: 1px solid #ccc;
            margin-top: 10px;
            border-radius: 15px;
        }

        .checkbox-list label {
            display: flex;
            justify-content: space-between;
            padding: 6px 14px;
            margin-left: 25px;
            font-size: 15px;
            font-weight: bold;
            color: #522f7e;
            ;
        }

        .radiobutton-con {
            display: flex;
            gap: 50px;
            border: 1px solid #ccc;
            margin-top: 10px;
            border-radius: 15px;
        }

        .radiobutton-list label {
            display: flex;
            justify-content: space-between;
            padding: 6px 14px;
            margin-left: 25px;
            font-size: 15px;
            font-weight: bold;
            color: #522f7e;
            ;
        }



        .register-btn {
            width: 100%;
            margin-top: 15px;
            padding: 15px;
            background-image: linear-gradient(#522f7e, #643c94);
            color: white;
            border: none;
            border-radius: 23px;
            cursor: pointer;
        }

        .register-btn:hover {
            width: 100%;
            padding: 18px;
            background-image: linear-gradient(rgb(228, 228, 228), white);
            color: #643c94;
            border: 1px solid #643c94;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.5s;
            font-size: 15px;
        }

        .register-btn a {
            color: white;
        }


        .login {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
        }

        .login a {
            color: #643c94;
            text-decoration: none;

        }

        .login a:hover {
            color: #643c94;
            text-decoration: underline;
            font-size: 15px;
            transition: 0.5s;
        }

        .header {
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            flex-wrap: wrap;
            background-image: #643c94;
        }

        .logo-header {
            width: 100px;
        }

        .search-bar {
            padding: 6px 10px;
            margin-left: 30px;
            border-radius: 25px;
            width: 320px;
            height: 30px;
            border: none;
            transition: 0.5s;
        }

        .search-bar:hover {
            padding: 8px 12px;
            transition: 0.5s;
        }

        .header-kiri {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .header-kanan a {
            color: white;
            margin: 15px;
            font-weight: bold;
            text-decoration: none;
        }

        .header-kanan a:hover {
            text-decoration: underline;
        }

        .login-button {
            font-size: 20px;
            padding: 10px 30px;
            background-color: #6B3FA0;
            border: 1px solid white;
            border-radius: 30px;
        }

        .login-button:hover {
            background-color: #ffffff;
            color: #643c94;
            font-size: 22px;
            scale: 0.05;
            transition: 0.5s;
        }


        .role.active {
            background: white;
            color: #643c94;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-kiri">
            <img src="{{ asset('img/koskamling-logo.png') }}" alt="koskamling-logo" class="logo-header">
        </div>
        <div class="header-kanan">
            <a href="#aboutus">About us</a>
            <a href="#help">Help</a>
            <a href="" class="login-button">Log out</a>
        </div>
    </header>
    <div class="form-register">
        <h2>Edit kos</h2>
        <hr>
        <form action="{{ route('kos.update', $kos->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Nama Kos</label>
            <input type="text" placeholder="Contoh: Kos Permata Indah" required name="name"
                value="{{ $kos->name }}" />

            <label>Kos diperuntukkan untuk</label>
            <select id="" name="type">
                <option value="Laki-laki" {{ $kos->type == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $kos->type == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                <option value="Campuran" {{ $kos->type == 'Campuran' ? 'selected' : '' }}>Campuran</option>
            </select>

            <label>Alamat</label>
            <input type="text" required name="address" value="{{ $kos->address }}" />

            <label>Kota Domilisi</label>
            <select id="" name="city">
                <option value="Cirebon" {{ $kos->city == 'Cirebon' ? 'selected' : '' }}>Cirebon</option>
                <option value="Majalengka" {{ $kos->city == 'Majalengka' ? 'selected' : '' }}>Majalengka</option>
                <option value="Kuningan" {{ $kos->city == 'Kuningan' ? 'selected' : '' }}>Kuningan</option>
                <option value="Bandung" {{ $kos->city == 'Bandung' ? 'selected' : '' }}>Bandung</option>
                <option value="Jakarta" {{ $kos->city == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                <option value="Surabaya" {{ $kos->city == 'Surabaya' ? 'selected' : '' }}>Surabaya</option>
                <option value="Yogyakarta" {{ $kos->city == 'Yogyakarta' ? 'selected' : '' }}>Yogyakarta</option>
                <option value="Purwokerto" {{ $kos->city == 'Purwokerto' ? 'selected' : '' }}>Purwokerto</option>
            </select>

            {{-- <label>Jumlah Kamar</label>
      <select id="">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        <option value="">5</option>
        <option value="">6</option>
        <option value="">7</option>
        <option value="">8</option>
        <option value="">9</option>
        <option value="">10</option>
        <option value="">11</option>
        <option value="">12</option>
        <option value="">13</option>
        <option value="">14</option>
        <option value="">15</option>
        <option value="">16</option>
        <option value="">17</option>
        <option value="">18</option>
        <option value="">19</option>
        <option value="">20</option>
        <option value="">21</option>
        <option value="">22</option>
        <option value="">23</option>
        <option value="">24</option>
      </select> --}}

            <label>Deskripsi</label>
            <input type="text" placeholder="Contoh: Kos dengan fasilitas mewah." required name="description"
                value="{{ $kos->description }}" />
            <label>Harga per bulan</label>
            <input type="number" placeholder="Contoh: 1200000" required name="price" value="{{ $kos->price }}" />
            <label>Nomor kontak</label>
            <input type="number" placeholder="Contoh: 08123456789" required name="contact_number"
                value="{{ $kos->contact_number }}" />

            <label>Fasilitas yang disediakan </label>
            <label>Gambar kos (Foto bangunan)</label>
            <input type="file" name="image" accept="image/*">
            {{-- <label>Gambar kos 2 (Foto kamar)</label>
      <input type="file" name="gambar" accept="application/jpg" required>
      <label>Gambar kos 3 (Foto wc)</label>
      <input type="file" name="gambar" accept="application/jpg" required> --}}

            {{-- <label>Luas kamar</label>
      <div style="display: flex; align-items: center; gap: 20px;">
        <select style="max-width: 180px;" name="panjang" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      <span>x</span>
        <select name="lebar" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      <span>m</span>
      </div> --}}
            {{--
      <label>Listrik</label>
      <div class="radiobutton-con">
        <div class="radiobutton-list">
          <label>Ya<input type="radio" name="listrik" value="ya" required></label>
          <label>Tidak<input type="radio" name="listrik" value="tidak" required></label>
        </div>
      </div> --}}

            {{-- <label>Air</label>
      <div class="radiobutton-con">
        <div class="radiobutton-list">
          <label>Ya<input type="radio" name="air" value="ya" required></label>
          <label>Tidak<input type="radio" name="air" value="tidak" required></label>
        </div>
      </div> --}}

            {{-- <label>Fasilitas yang disediakan  </label>
      <div class="checkbox-con">
        <div class="checkbox-list">
          <label>Kasur <input type="checkbox" name="fasilitas[]" value="kasur"></label>
          <label>Lemari <input type="checkbox" name="fasilitas[]" value="lemari"></label>
          <label>Bantal <input type="checkbox" name="fasilitas[]" value="bantal"></label>
          <label>Guling <input type="checkbox" name="fasilitas[]" value="guling"></label>
          <label>Meja <input type="checkbox" name="fasilitas[]" value="meja"></label>
          <label>Kursi <input type="checkbox" name="fasilitas[]" value="kursi"></label>
          <label>Jendela <input type="checkbox" name="fasilitas[]" value="jendela"></label>
          <label>TV <input type="checkbox" name="fasilitas[]" value="tv"></label>
        </div>
      </div> --}}

            {{-- <label>Kamar mandi</label>
      <div class="radiobutton-con">
        <div class="radiobutton-list">
          <label>Dalam<input type="radio" name="kamar-mandi" value="dalam" required></label>
          <label>Luar<input type="radio" name="kamar-mandi" value="luar" required></label>
        </div>
      </div> --}}

            {{-- <label>WC</label>
      <div class="radiobutton-con">
        <div class="radiobutton-list">
          <label>Duduk<input type="radio" name="wc" value="Duduk" required></label>
          <label>Jongkok<input type="radio" name="wc" value="Jongkok" required></label>
        </div>
      </div> --}}

            {{-- <label>Fasilitas kamar mandi</label>
      <div class="checkbox-con">
        <div class="checkbox-list">
          <label>Shower <input type="checkbox" name="fasilitas[]" value="shower"></label>
          <label>Bathtub <input type="checkbox" name="fasilitas[]" value="bathtub"></label>
          <label>Bak <input type="checkbox" name="fasilitas[]" value="bak"></label>
          <label>Ember <input type="checkbox" name="fasilitas[]" value="ember"></label>
          <label>Wastafel <input type="checkbox" name="fasilitas[]" value="wastafel"></label>
        </div>
      </div> --}}

            {{-- <label>Fasilitas Umum</label>
      <div class="checkbox-con">
        <div class="checkbox-list">
          <label>Wi-Fi <input type="checkbox" name="fasilitas[]" value="wifi"></label>
          <label>Dapur <input type="checkbox" name="fasilitas[]" value="dapur"></label>
          <label>Kulkas <input type="checkbox" name="fasilitas[]" value="kulkas"></label>
          <label>Dispenser <input type="checkbox" name="fasilitas[]" value="dispenser"></label>
          <label>Jemuran <input type="checkbox" name="fasilitas[]" value="jemuran"></label>
          <label>Parkiran <input type="checkbox" name="fasilitas[]" value="parkiran"></label>
          <label>CCTV <input type="checkbox" name="fasilitas[]" value="cctv"></label>
        </div>
      </div> --}}


            <button style="margin-top: 30px;" type="submit" class="register-btn">Ajukan</button>
        </form>
    </div>

    <script>
        const roleButtons = document.querySelectorAll(".role");

        roleButtons.forEach(button => {
            button.addEventListener("click", () => {
                roleButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");
            });
        });
    </script>

</body>

</html>
