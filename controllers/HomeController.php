<?php

class HomeController
{
    public $modelPhong;
    public $modelTaiKhoan;
    public $modelGioHang;

    function __construct()
    {
        $this->modelPhong = new Phong();
        $this->modelTaiKhoan = new TaiKhoan();
        $this->modelGioHang = new GioHang();
    }


    public function home()
    {
        $newphong = $this->modelPhong->layPhongMoiNhat();
        require_once './views/home.php';
    }
    public function phong()
    {
        $newphong = $this->modelPhong->layPhongMoiNhat();
        require_once './views/phong.php';
    }

    public function dichvu()
    {
        require_once './views/dichvu.php';
    }


    public function chiTietPhong()
    {
        // $Phong = $this->modelPhong->GetDetailPhong($id);

        // $listAnhPhong = $this->modelPhong->GetListAnhPhong($id);

        // $listBinhLuan = $this->modelPhong->GetBinhLuanFromPhong($id);

        // $listPhongCungDanhMuc = $this->modelPhong->getListPhongDanhMuc($Phong['danh_muc_id']);
        require_once './views/chitietPhong.php';
    }

    function formLogin()
    {
        require_once './views/auth/dangnhap.php';
        deleteSessionError();
    }

    function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $user = $this->modelTaiKhoan->CheckLogin($email, $pass);

            if ($user == $email) {
                $_SESSION['user_client'] = $user;
                header("location:" . BASE_URL_ADMIN . '?act=/');
                exit();
            } else {
                $_SESSION['error'] = $user;

                $_SESSION['flash'] = true;

                header("Location: " . BASE_URL_ADMIN . '?act=login');
                exit();
            }
        }
    }

    function themGioHang()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_SESSION['user_client'])) {
                $mail = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);

                $gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);

                if (!$gioHang) {
                    $gioHangId = $this->modelGioHang->addGioHang($mail['id']);
                    $gioHang = ['id' => $gioHangId];
                    $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
                } else {
                    $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
                }

                $san_pham_id = $_POST['san_pham_id'];
                $so_luong = $_POST['so_luong'];

                $checkPhong = false;
                foreach ($chiTietGioHang as $detail) {
                    if ($detail['san_pham_id'] == $san_pham_id) {
                        $newSoLuong = $detail['so_luong'] + $so_luong;
                        $this->modelGioHang->updateSoLuong($gioHang['id'], $san_pham_id, $newSoLuong);
                        $checkPhong = true;
                        break;
                    }
                }
                if (!$checkPhong) {
                    $this->modelGioHang->addDetailGioHang($gioHang['id'], $san_pham_id, $so_luong);
                }
                require_once './views/gioHang.php';
            } else {
                require_once './views/auth/formLogin.php';
            }
        }
    }

    function logout()
    {
        if (isset($_SESSION['user_client'])) {
            unset($_SESSION['user_client']);
            header("location: " . BASE_URL_ADMIN . '?act=login');
        }
    }

    function lienhe()
    {
        require_once  './views/lienhe.php';
    }

    function gioithieu()
    {
        require_once './views/gioithieu.php';
    }

    public function timKiemPhong()
    {
        $search = isset($_POST['search']) ? trim($_POST['search']) : '';

        if (!empty($search)) {
            $products = $this->modelPhong->timKiemPhong($search);
        }

        require_once './views/timphong.php';
    }
    public function dangky(){
        require_once './views/auth/dangky.php';
    }
    public function datphong(){
        require_once './views/datphong.php';
    }
}
