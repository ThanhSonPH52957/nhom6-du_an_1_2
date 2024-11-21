<?php
class Phong {
    public $conn;

    function __construct() {
        $this -> conn = connectDB();
    }

    public function layDanhSachHinhAnhTheoPhong($id) {
        $sql = 'SELECT * FROM album_anh_phongs WHERE phong_id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function layDanhSachPhongTheoDanhMuc($idDanhMuc) {
        $sql = 'SELECT phongs.*, danh_muc_phongs.ten_danh_muc 
                FROM phongs 
                INNER JOIN danh_muc_phongs ON phongs.danh_muc_id = danh_muc_phongs.id 
                WHERE danh_muc_id = :idDanhMuc';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':idDanhMuc' => $idDanhMuc]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function layChiTietPhong($id) {
        $sql = 'SELECT phongs.*, danh_muc_phongs.ten_danh_muc 
                FROM phongs 
                INNER JOIN danh_muc_phongs ON phongs.danh_muc_id = danh_muc_phongs.id 
                WHERE phongs.id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function layDanhSachBinhLuanTheoPhong($idPhong) {
        $sql = 'SELECT binh_luans.*, tai_khoans.ho_ten 
                FROM binh_luans 
                INNER JOIN tai_khoans ON binh_luans.tai_khoan_id = tai_khoans.id 
                WHERE binh_luans.phong_id = :idPhong';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':idPhong' => $idPhong]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function layPhongMoiNhat() {
        $sql = 'SELECT phongs.*, danh_muc_phongs.ten_danh_muc 
                FROM phongs 
                INNER JOIN danh_muc_phongs ON phongs.danh_muc_id = danh_muc_phongs.id
                ORDER BY phongs.id DESC LIMIT 4';
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function layPhongLienQuan($idDanhMuc, $idHienTai) {
        $sql = 'SELECT phongs.*, danh_muc_phongs.ten_danh_muc 
                FROM phongs 
                INNER JOIN danh_muc_phongs ON phongs.danh_muc_id = danh_muc_phongs.id 
                WHERE danh_muc_id = :idDanhMuc AND phongs.id != :idHienTai 
                LIMIT 4';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':idDanhMuc' => $idDanhMuc, ':idHienTai' => $idHienTai]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function timKiemPhong($tuKhoa) {
        $sql = 'SELECT phongs.*, danh_muc_phongs.ten_danh_muc 
                FROM phongs 
                INNER JOIN danh_muc_phongs ON phongs.danh_muc_id = danh_muc_phongs.id 
                WHERE phongs.ten_phong LIKE :tuKhoa OR danh_muc_phongs.ten_danh_muc LIKE :tuKhoa';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':tuKhoa' => '%' . $tuKhoa . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
