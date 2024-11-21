
  <style>
  /* Reset margin/padding */
body, html {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

header {
  background-color: #f8f9fa;
  padding: 10px 20px;
}

header nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh; /* Chiều cao toàn màn hình */
}

.register-form {
  width: 400px;
  padding: 20px;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin: 20px 0;
}

.register-form h1 {
  text-align: center;
  color: #b3722b;
}

.register-form input, .register-form button {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btn-submit {
  background-color: #b3722b;
  color: white;
  border: none;
  cursor: pointer;
}

.btn-submit:hover {
  background-color: #a16222;
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
}

footer p {
  margin: 0;
}
.social-buttons {
  display: flex;
  justify-content: center;
  gap: 10px;
}

.social-buttons button {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  color: white;
  cursor: pointer;
}

.social-buttons .btn-facebook {
  background-color: #3b5998;
}

.social-buttons .btn-google {
  background-color: #db4a39;
}

.social-buttons img {
  width: 20px;
  height: 20px;
}

.social-buttons button:hover {
  opacity: 0.8;
}

  </style>
</head>
<body>
<?php include './views/layout/menu.php'; ?>

<div class="container">
  <h1>ĐĂNG NHẬP</h1>  
  <form class="register-form" method="POST" action="">
    <input type="text" name="emailsdt" placeholder="Email/Số điện thoại" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit" class="btn-submit">Đăng nhập</button>
    <p>Chưa có tài khoản? <a href="?act=dangky">Đăng ký tại đây</a></p>
  </form>
  
  <p class="social-login-text">Hoặc đăng nhập bằng:</p>
  <div class="social-buttons">
  <div class="social-buttons">
  <button class="btn-facebook">
    <img src="fblogo.webp" alt="Facebook Logo"> Facebook
  </button>
  <button class="btn-google">
    <img src="gglogo.webp" alt="Google Logo"> Google
  </button>
</div>
  </div>
</div>

<?php include './views/layout/footer.php'; ?>


</body>
</html>
