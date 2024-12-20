<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/AdminDanhMucController.php';
require_once './controllers/AdminDichVuController.php';
require_once './controllers/AdminPhongController.php';
require_once './controllers/AdminDonHangController.php';
require_once './controllers/AdminBaoCaoController.php';
require_once './controllers/AdminTaiKhoanController.php';
// Require toàn bộ file Models
require_once './models/AdminPhong.php';
require_once './models/AdminDanhMuc.php';
require_once './models/AdminDichVu.php';
require_once './models/AdminDonHang.php';
require_once './models/AdminTaiKhoan.php';

// Route
$act = $_GET['act'] ?? '/';

if($act !== 'loginadmin' && $act !== 'checkloginadmin' && $act !== 'logoutadmin') {
    checkLoginAdmin();
}
// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    '/' => (new AdminBaoCaoController()) -> home(),

    //router danh mục
    'danhmuc' => (new AdminDanhMucController()) -> danhSachDanhMuc(),
    'forminsertdanhmuc' => (new AdminDanhMucController()) -> formInsertDanhMuc(),
    'insertdanhmuc' => (new AdminDanhMucController()) -> insertDanhMuc(),
    'formupdatedanhmuc' => (new AdminDanhMucController()) -> formUpdateDanhMuc($_GET['id']),
    'updatedanhmuc' => (new AdminDanhMucController()) -> updateDanhMuc($_GET['id']),
    'deletedanhmuc' => (new AdminDanhMucController()) -> deleteDanhMuc($_GET['id']),

    //router sản phẩm
    'phong' => (new AdminPhongController()) -> danhSachPhong(),
    'forminsertphong' => (new AdminPhongController()) -> formInsertPhong(),
    'insertphong' => (new AdminPhongController()) -> insertPhong(),
    'formupdatephong' => (new AdminPhongController()) -> formUpdatePhong($_GET['id']),
    'updatephong' => (new AdminPhongController()) -> updatePhong(),
    // 'updatealbumanhphong' => (new AdminPhongController()) -> updateAlbumPhong(),
    'deletephong' => (new AdminPhongController()) -> deletePhong($_GET['id']),

    //router quản lý bình luận
    // 'updatebinhluan' => (new AdminPhongController()) -> updateBinhLuan(),

    //router dịch vụ
    'dichvu' => (new AdminDichVuController()) -> danhSachDichVu(),
    'forminsertdichvu' => (new AdminDichVuController()) -> formInsertDichVu(),
    'insertdichvu' => (new AdminDichVuController()) -> insertDichVu(),
    'formupdatedichvu' => (new AdminDichVuController()) -> formUpdateDichVu($_GET['id']),
    'updatedichvu' => (new AdminDichVuController()) -> updateDichVu($_GET['id']),
    'deletedichvu' => (new AdminDichVuController()) -> deleteDichVu($_GET['id']),

    // //router đơn hàng
    // 'donhang' => (new AdminDonHangController()) -> danhSachDonHang(),
    // 'chitietdonhang' => (new AdminDonHangController()) -> chiTietDonHang($_GET['id_don_hang']),
    // 'formupdatedonhang' => (new AdminDonHangController()) -> formUpdateDonHang($_GET['id_don_hang']),
    // 'updatedonhang' => (new AdminDonHangController()) -> updateDonHang($_GET['id']),

    //router quản lý tài khoản
    'listtaikhoan' => (new AdminTaiKhoanController()) -> danhSachTaiKhoan(),
    'updatetaikhoan' => (new AdminTaiKhoanController()) -> updateTaiKhoan($_GET['id']),

    // //router quản lý tài khoản cá nhân
    // 'formupdatecanhan' => (new AdminTaiKhoanController()) -> formUpdateCaNhan(),
    // // 'updatecanhan' => (new AdminTaiKhoanController()) -> updateCaNhan(),
    // 'updatematkhaucanhan' => (new AdminTaiKhoanController()) -> updateMatKhauCaNhan(),

    // //route auth
    'loginadmin' => (new AdminTaiKhoanController()) -> formLogin(),
    'checkloginadmin' => (new AdminTaiKhoanController()) -> login(),
    'logoutadmin' => (new AdminTaiKhoanController()) -> logout(),
};