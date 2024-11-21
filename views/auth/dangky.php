
  <?php include './views/layout/menu.php'; ?>

  <style>
    /* Reset margin/padding */
    body, html {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    /* Main Layout Styles */
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 80px); /* Adjust height to fit content between header and footer */
      padding: 20px;
    }

    /* Form Styles */
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

    .register-form input,
    .register-form button {
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

    /* Social Buttons Styles */
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
    
    /* Footer Styles */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
      position: relative; /* Đặt lại relative để tránh đè lên nội dung */
      bottom: 0;
      left: 0;
      width: 100%; /* Chiếm toàn bộ chiều rộng màn hình */
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }

    footer p {
      margin: 0;
    }

    /* Full-Height Layout for Content */
    html, body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }


  </style>
<body>

  
  <main class="container">
    <h1>ĐĂNG KÝ</h1>
    <p>Đã có tài khoản? <a href="?act=dangnhap">Đăng nhập tại đây</a></p>
    
    <form class="register-form" method="POST" action="">
      <input type="text" name="ho" placeholder="Họ" required>
      <input type="text" name="ten" placeholder="Tên" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="tel" name="sdt" placeholder="Số điện thoại" required>
      <input type="password" name="matkhau" placeholder="Mật Khẩu" required>
      <button type="submit" class="btn-submit">Đăng ký</button>
    </form>
    
    <p class="social-login-text">Hoặc đăng nhập bằng:</p>
    <div class="social-buttons">
      <button class="btn-facebook">
        <img src="fblogo.webp" alt="Facebook Logo"> Facebook
      </button>
      <button class="btn-google">
        <img src="gglogo.webp" alt="Google Logo"> Google
      </button>
    </div>
  </main>
  
  <?php include './views/layout/footer.php'; ?>
</body>
</html>
