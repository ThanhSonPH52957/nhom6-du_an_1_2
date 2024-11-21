<?php
    class AdminTaiKhoan {
        public $conn;

        function __construct() {
            $this -> conn = connectDB();
        }

        function getAllTaiKhoan() {
            $sql = 'SELECT tai_khoans.*, chuc_vus.ten_chuc_vu
                    FROM tai_khoans 
                    INNER JOIN chuc_vus ON tai_khoans.chuc_vu_id = chuc_vus.id';
            $stmt = $this -> conn -> prepare($sql);
            $stmt -> execute();    
            return $stmt->fetchAll();
        }

        function InsertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id) {
            $sql = "insert into tai_khoans (ho_ten, email, mat_khau, chuc_vu_id) values (:ho_ten, :email, :password, :chuc_vu_id)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
            ':ho_ten' => $ho_ten,
            ':email' => $email,
            ':password' => $password,
            ':chuc_vu_id' => $chuc_vu_id
        ]);
        }

        function getOneTaiKhoan($id) {
            $sql = 'select * from tai_khoans where id = :id';
            $stmt = $this -> conn -> prepare($sql);
            $stmt -> execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        }   

        function UpdateTaiKhoan($id, $chucvu) {
            $sql = "update tai_khoans set chuc_vu_id = :chucvu where id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
            'id' => $id,
            'chucvu' => $chucvu
            ]);

            return true;
        }

        function ResetPassword($id, $password) {
            $sql = "update tai_khoans set mat_khau = :mat_khau where id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':mat_khau' => $password,
                ':id' => $id
            ]);

            return true;
        }

        function UpdateKhachHang($khach_hang_id, $ho_ten, $so_dien_thoai, $email, $ngay_sinh, $gioi_tinh, $dia_chi, $trang_thai) {
            $sql = "update tai_khoans set ho_ten = :ho_ten, so_dien_thoai = :so_dien_thoai, email = :email, ngay_sinh = :ngay_sinh, gioi_tinh = :gioi_tinh, dia_chi = :dia_chi, trang_thai = :trang_thai where id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
            ':ho_ten' => $ho_ten,
            ':so_dien_thoai' => $so_dien_thoai,
            ':email' => $email,
            ':ngay_sinh' => $ngay_sinh,
            ':gioi_tinh' => $gioi_tinh,
            ':dia_chi' => $dia_chi,
            ':trang_thai' => $trang_thai,
            'id' => $khach_hang_id
            ]);

            return true;
        }

        function CheckLogin($user, $pass) {
            try {
                $sql = 'select * from tai_khoans where email = :email';
                $stmt = $this -> conn -> prepare($sql);
                $stmt -> execute([
                    ':email' => $user
                ]);
                $login = $stmt -> fetch();

                if($login && $login['mat_khau'] == $pass) {
                    if ($login['chuc_vu_id'] == 1) {
                        return $login['email'];
                    }else {
                        return "Tài khoản không có quyền đăng nhập";
                    }
                } else {
                    return "Sai thông tin tài khoản hoặc mật khẩu";
                }
            } catch (\Exception $e) {
                echo "Lỗi" . $e -> getMessage();
                return false;
            }
        }

        function getOneTaiKhoanFromEmail($email) {
            $sql = 'select * from tai_khoans where email = :email';
            $stmt = $this -> conn -> prepare($sql);
            $stmt -> execute([
                ':email' => $email
            ]);
            return $stmt -> fetch();
        }
    }
?>