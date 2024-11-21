<?php

class AdminPhong
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }

    function getAllPhong()
    {
        $sql = 'SELECT phongs.*, danh_muc_phongs.ten_danh_muc
        FROM phongs 
        INNER JOIN danh_muc_phongs ON phongs.danh_muc_id = danh_muc_phongs.id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getAllDanhMuc()
    {
        $sql = 'select * from danh_muc_phongs';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function InsertPhong($ten_phong, $gia_phong, $danh_muc_id, $mo_ta, $file_thumb)
    {
        $sql = "insert into phongs (ten_phong, gia_tien, danh_muc_id, trang_thai, mo_ta, hinh_anh) values (:ten_phong, :gia_phong, :danh_muc_id, 1, :mo_ta, :hinh_anh)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':ten_phong' => $ten_phong,
            ':gia_phong' => $gia_phong,
            ':danh_muc_id' => $danh_muc_id,
            ':mo_ta' => $mo_ta,
            ':hinh_anh' => $file_thumb
        ]);

        return $this->conn->lastInsertId();
    }

    function insertAlbumAnhPhong($phong_id, $link_hinh_anh)
    {
        $sql = "insert into album_anh_phongs (phong_id, link_hinh_anh) values (:phong_id, :link_hinh_anh)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':phong_id' => $phong_id,
            ':link_hinh_anh' => $link_hinh_anh,
        ]);
        return true;
    }

    function getOnePhong($id)
    {
        $sql = 'select * from phongs where id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }

    function getListAnhPhong($id)
    {
        $sql = 'select * from album_anh_phongs where phong_id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetchAll();
    }

    function UpdatePhong($phong_id, $ten_phong, $gia_phong, $danh_muc_id, $trang_thai, $mo_ta, $new_file)
    {
        $sql = "update phongs set ten_phong = :ten_phong, gia_tien = :gia_phong, danh_muc_id = :danh_muc_id, trang_thai = :trang_thai, mo_ta = :mo_ta, hinh_anh = :hinh_anh where id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':ten_phong' => $ten_phong,
            ':gia_phong' => $gia_phong,
            ':danh_muc_id' => $danh_muc_id,
            ':trang_thai' => $trang_thai,
            ':mo_ta' => $mo_ta,
            ':hinh_anh' => $new_file,
            ':id' => $phong_id
        ]);

        return true;
    }

    function getDetailAnhSanPham($id)
    {
        $sql = 'select * from hinh_anh_phongs where id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }

    function updateAlbumSanPham($id, $new_file)
    {
        $sql = "update hinh_anh_san_phams set link_hinh_anh = :new_file where id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':new_file' => $new_file,
            ':id' => $id
        ]);

        return true;
    }

    function destroyAnhSanPham($id)
    {
        $sql = 'delete from hinh_anh_san_phams where id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }

    //Bình luận
    function getBinhLuanFromKhachHang($id)
    {
        $sql = 'select binh_luans.*, san_phams.ten_san_pham from binh_luans inner join san_phams on binh_luans.san_pham_id = san_phams.id where tai_khoan_id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetchAll();
    }

    function getOneBinhLuan($id)
    {
        $sql = 'select * from binh_luans where id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }

    function UpdateBinhLuan($id, $trang_thai_update)
    {
        $sql = 'update binh_luans set trang_thai = :trang_thai where id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':trang_thai' => $trang_thai_update
        ]);
        return true;
    }

    function DeletePhong($id)
    {
        $sql = 'delete from phongs where id =' . $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([]);

        return true;
    }

    function DeleteAlbumPhong($id)
    {
        $sql = 'delete from album_anh_phongs where phong_id =' . $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([]);

        return true;
    }
}
