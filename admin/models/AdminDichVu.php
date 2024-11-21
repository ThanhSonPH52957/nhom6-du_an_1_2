<?php 

class AdminDichVu
{
    public $conn;

    function __construct() {
        $this -> conn = connectDB();
    }

    function getAllDichVu() {
        $sql = 'select * from dich_vus';
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    function InsertDichVu($ten_dich_vu, $gia_dich_vu, $mo_ta) {
        $sql = "insert into dich_vus (ten_dich_vu, gia_dich_vu, mo_ta) values (:ten_dich_vu, :gia_dich_vu, :mo_ta)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':ten_dich_vu' => $ten_dich_vu,
            ':gia_dich_vu' => $gia_dich_vu,
            ':mo_ta' => $mo_ta
        ]);
    }

    function getOneDichVu($id) {
        $sql = 'select * from dich_vus where id = :id';
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }

    function UpdateDichVu($id, $ten_dich_vu, $gia_dich_vu, $mo_ta) {
        $sql = "UPDATE dich_vus SET ten_dich_vu = :ten_dich_vu, gia_dich_vu = :gia_dich_vu, mo_ta = :mo_ta WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':ten_dich_vu' => $ten_dich_vu,
            ':gia_dich_vu' => $gia_dich_vu,
            ':mo_ta' => $mo_ta
        ]);
    }

    function DeleteDichVu($id) {
        $sql = 'delete from dich_vus where id = :id';
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }
}