<?php
    class AdminTaiKhoanController {
        public $modelTaiKhoan;
        public $modelDonHang;
        public $modelSanPham;

        function __construct() {
            $this -> modelTaiKhoan = new AdminTaiKhoan();
            $this -> modelDonHang = new AdminDonHang();
            // $this -> modelSanPham = new AdminSanPham();
        }

        function danhSachTaiKhoan() {
            $alllisttaikhoan = $this -> modelTaiKhoan -> getAllTaiKhoan();
            require_once './views/taikhoan/listTaiKhoan.php';
        }

        function updateTaiKhoan($id) {
            $onetaikhoan = $this -> modelTaiKhoan -> GetOneTaiKhoan($id);
            if($onetaikhoan['chuc_vu_id'] == 1) {
                $chucvu = 2;
            } else {
                $chucvu = 1;
            }
            $this -> modelTaiKhoan -> UpdateTaiKhoan($id, $chucvu);
            header("Location: ".BASE_URL_ADMIN.'?act=listtaikhoan');
        }

        function formLogin() {
            require_once './views/auth/formLogin.php';
            deleteSessionError();
        }

        function login() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                
                $log = $this -> modelTaiKhoan -> CheckLogin($user, $pass);
                if ($log == $user) {
                    $_SESSION['user_admin'] = $log;
                    header("location:".BASE_URL_ADMIN.'?act=/');
                    exit();
                } else {
                    $_SESSION['error'] = $log;

                    $_SESSION['flash'] = true;

                    header("Location: ".BASE_URL_ADMIN.'?act=loginadmin');
                    exit();
                }
            } 
        }

        function logout() {
            if (isset($_SESSION['user_admin'])) {
                unset($_SESSION['user_admin']);
                header("location: " . BASE_URL_ADMIN . '?act=loginadmin');
            }
        }

        function formUpdateCaNhan() {
            $email = $_SESSION['user_admin'];
            $thongtin = $this -> modelTaiKhoan -> getOneTaiKhoanFromEmail($email);
            require_once './views/taikhoan/canhan/updateCaNhan.php';
            deleteSessionError();
        }

        function updateMatKhauCaNhan() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $old_pass = $_POST['old_pass'];
                $new_pass = $_POST['new_pass'];
                $confirm_pass = $_POST['confirm_pass'];

                $user = $this -> modelTaiKhoan -> getOneTaiKhoanFromEmail($_SESSION['user_admin']);

                $checkPass = password_verify($old_pass, $user['mat_khau']);

                $errors = [];
                if(!$checkPass) {
                    $errors['old_pass'] = 'Mật khẩu người dùng không đúng';
                }

                if($new_pass !== $confirm_pass) {
                    $errors['confirm_pass'] = 'Xác nhận mật khẩu không đúng';
                }

                if(empty($old_pass)) {
                    $errors['old_pass'] = 'Vui lòng nhập vào mật khẩu';
                }

                if(empty($new_pass)) {
                    $errors['new_pass'] = 'Vui lòng nhập mật khẩu mới';
                }

                if(empty($confirm_pass)) {
                    $errors['confirm_pass'] = 'Vui lòng xác nhận mật khẩu';
                }

                $_SESSION['error'] = $errors;
                if(!$errors) {
                    $hashPass = password_hash($new_pass, PASSWORD_BCRYPT);
                    $status = $this -> modelTaiKhoan -> resetPassword($user['id'], $hashPass);
                    if ($status) {
                        $_SESSION['success'] = "Đổi mật khẩu thành công";
                        $_SESSION['flash'] = true;
                        header("Location: " . BASE_URL_ADMIN . '?act=formupdatecanhan');
                    }
                } else {
                    $_SESSION['flash'] = true;

                    header("Location: " . BASE_URL_ADMIN . '?act=formupdatecanhan');
                    exit();
                }
            }
        }
    }
?>
