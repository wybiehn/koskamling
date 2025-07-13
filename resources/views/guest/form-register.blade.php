<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
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

.form-register{
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
  background-image: linear-gradient( rgb(228, 228, 228), white);
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




.role.active {
  background: white;
  color: #643c94;
}

  </style>
</head>
<body>

  <div class="form-register">
    <h2>Daftar</h2>

    {{-- <div class="role-buttons">
      <button class="role" value="">Penyedia Kos</button>
      <button class="role" value="">Pencari Kos</button>
    </div> --}}
    <hr>
    <form method="POST" action="{{ route('register.post') }}">
      @csrf
      <label>Username</label>
      <input type="username" placeholder="Contoh: meta_aprilia" required name="username"/>
      <label>Email</label>
      <input type="email" placeholder="Contoh: meta@Gmail.com" required name="email"/>
      <label>Kata Sandi</label>
      <input type="password"  required name="password"/>
      <input type="submit" class="register-btn" value="Daftar"></input>
      <p class="login">Sudah punya akun? <a href="/login">Login</a></p>
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
