<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Log in</title>
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

  </style>
</head>
<body>

  <div class="form-login">
    <h2>Login</h2>

    {{-- <div class="role-buttons">
      <button class="role">Penyedia Kos</button>
      <button class="role">Pencari Kos</button>
    </div> --}}
    <hr>
    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <label>Email</label>
      <input type="email" placeholder="Contoh: meta@Gmail.com" required name="email"/>

      <label>Kata Sandi</label>
      <input type="password" placeholder="Contoh: meta123" required name="password"/>

      <a href="form-forgotpassword.html" class="forgot">Lupa Kata Sandi?</a>

      <button type="submit" class="login-btn">Masuk</button>

      <p class="register">Belum punya akun? <a href="/register">Daftar</a></p>
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
