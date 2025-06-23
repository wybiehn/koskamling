<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verifikasi Kode</title>
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
      margin-bottom: 50px;
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

  .register-btn {
    display: block;
    text-align: center;
    text-decoration: none;
    width: 100%;
    margin-top: 20px;
    padding: 15px;
    background-image: linear-gradient(#522f7e, #643c94);
    color: white;
    border: none;
    border-radius: 23px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    box-sizing: border-box;
    transition: 0.3s;
  }

  .register-btn:hover {
    padding: 18px;
    background-image: linear-gradient(rgb(228, 228, 228), white);
    color: #643c94;
    border: 1px solid #643c94;
    border-radius: 25px;
    font-size: 15px;
    text-decoration: none;
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

    .code-container {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .code-input {
      width: 50px;
      height: 50px;
      font-size: 24px;
      text-align: center;
      border: 2px solid #ccc;
      border-radius: 40px;
      transition: 0.3s;
    }

    .code-input:focus {
      border-color: #391960;
      outline: none;
    }
  </style>
</head>
<body>

  <div class="form-register">
    <h2>Verifikasi kode</h2>
    <form>
      <label>Masukkan kode Verifikasi</label>
      <div class="code-container">
        <input type="text" maxlength="1" class="code-input" />
        <input type="text" maxlength="1" class="code-input" />
        <input type="text" maxlength="1" class="code-input" />
        <input type="text" maxlength="1" class="code-input" />
      </div>
      <p class="login"><a href="form-register.html">Kirim ulang kode verifikasi</a></p>
      <a href="form-newpassword.html" class="register-btn">Lanjut</a>

      <p class="login" style="margin-top: 40px;">Kembali ke halaman <a href="form-login.html">Login</a></p>
      <label style="margin-top: 15px; margin-bottom: 15px;"><center>atau</center></label>
      <p class="login">Buat akun baru dengan <a href="form-register.html">Daftar</a></p>
    </form>
  </div>

  <script>
    const inputs = document.querySelectorAll(".code-input");

    inputs.forEach((input, index) => {
      input.addEventListener("input", () => {
        if (input.value && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });

      input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && input.value === "" && index > 0) {
          inputs[index - 1].focus();
        }
      });
    });
  </script>
</body>
</html>
