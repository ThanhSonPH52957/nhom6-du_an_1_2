<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models
require_once './models/TaiKhoan.php';
require_once './models/Phong.php';
require_once './models/GioHang.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->home(),
    'phong' => (new HomeController())->phong(),
    'datphong' => (new HomeController())->datphong(),
    'timphong' => (new HomeController())->timKiemPhong(),
    'dichvu' => (new HomeController())->dichvu(),
    'chitietphong' => (new HomeController())->chiTietPhong(),
    'themgiohang' => (new HomeController())->themGioHang(),
    // 'giohang' => (new HomeController()) -> gioHang(),
    'dangky' => (new HomeController())->dangKy(),
    'dangnhap' => (new HomeController())->formLogin(),
    'checklogin' => (new HomeController())->postLogin(),
    'logout' => (new HomeController())->logout(),

    // 'binhluan' => (new HomeController()) -> binhLuan(),
    'lienhe' => (new homeController())->lienhe(),
    'gioithieu' => (new HomeController())->gioithieu(),
    // 'binhluan' => (new HomeController()) -> binhLuan()
};