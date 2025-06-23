<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Payment</title>
  <link rel="icon" href="/Koskamling/img/koskamling-logo.png">
  <style>
  body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: linear-gradient(#643c94, #391960);
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
}

.form-login {
  background: white;
  width: 320px;
  padding: 30px;
  margin: 80px auto;
  border-radius: 30px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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
  background-image: linear-gradient( #522f7e, #643c94);
  color: #ffffff;
  transition: 0.5s;
  cursor: pointer;
  border-radius: 20px;
}

.role:hover {
  flex: 1;
  padding: 14px;
  border: 1px solid #643c94;
  background-image: linear-gradient( rgb(228, 228, 228), white);
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

.forgot {
  display: block;
  text-align: right;
  margin: 10px 0;
  font-size: 13px;
  color: #643c94;
  text-decoration: none;
}
.forgot:hover {
  display: block;
  text-align: right;
  margin: 10px 0;
  font-size: 13px;
  color: #643c94;
  text-decoration: underline;
  font-size: 15px;
  transition: 0.5s;
}

.login-btn {
  width: 100%;
  margin-top: 15px;
  padding: 15px;
  background-image: linear-gradient( #522f7e, #643c94);
  color: white;
  border: none;
  border-radius: 23px;
  cursor: pointer;
}

.login-btn:hover {
  width: 100%;
  padding: 18px;
  background-image: linear-gradient( rgb(228, 228, 228), white);
  color: #643c94;
  border: 1px solid #643c94;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
  font-size: 15px;
}

.register {
  text-align: center;
  margin-top: 15px;
  font-size: 13px;
}

.register a {
  color: #643c94;
  text-decoration: none;
  
}
.register a:hover {
  color: #643c94;
  text-decoration: underline;
  font-size: 15px;
  transition: 0.5s;
}



.role.active {
  background: white;
  color: #643c94;
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

.price-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  font-size: 14px;
  font-weight: bold;
  color: #444;
}

.address {
    font-size: 14px;
    max-width: 400px;
    font-weight: bold;
    color: #444;
    margin-bottom: 20px;
}

.harga {
  color: #643c94;
  font-size: 18px;
}

.address2 {
    font-size: 15px;
    max-width: 400px;
    font-weight: bold;
    color: #444;
    margin-bottom: 20px;
}

.harga2 {
  color: #643c94;
  font-size: 19px;
}



  </style>
</head>
<body>

  <div class="form-login">
    <h2>Pembayaran</h2>
    <hr>
    <form>
      <label>Pilih Payment</label>
      <select id="">
          <option value="">Bayar langsung</option>
          <option value="">DANA</option>
          <option value="">BCA</option>
          <option value="">MANDIRI</option>
          <option value="">KosWallet</option>
      </select>

      <label>Keterangan Pembayaran</label>
      <div class="price-info">
        <p class="address">Harga kos per bulan</p>
        <p class="harga">Rp 1.200.000</p>
      </div>
      <div class="price-info">
        <p class="address">Jumlah Bulan</p>
        <p class="harga" style="margin-right: 45px;">6 bulan</p>
      </div>

      <hr>

      <div class="price-info">
        <p class="address2">Total harga yang dibayar</p>
        <p class="harga2" style="margin-right: 20px;">Rp sekian</p>
      </div>


      <button type="submit" class="login-btn">Ajukan Permintaan</button>
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
