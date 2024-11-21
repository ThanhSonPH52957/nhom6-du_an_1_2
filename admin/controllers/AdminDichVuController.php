<?php
    class AdminDichVuController {
        public $modelDichVu;
        function __construct() {
            $this -> modelDichVu = new AdminDichVu();
        }
        public function danhSachDichVu() {
            $alldichvu = $this -> modelDichVu -> getAllDichVu();
            require_once './views/dichvu/listDichVu.php';
        }

        function formInsertDichVu() {
            require_once './views/dichvu/addDichVu.php';
        }

        function insertDichVu() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ten_dich_vu = $_POST['ten_dich_vu'];
                $gia_dich_vu = $_POST['gia_dich_vu'];
                $mo_ta = $_POST['mo_ta'];
                // var_dump($ten_dich_vu, $gia_dich_vu, $mo_ta);die;
                $errors = [];
                if(empty($ten_dich_vu)) {
                    $errors['ten_dich_vu'] = 'Tên dịch vụ không được để trống';  
                }
                if(empty($gia_dich_vu)) {
                    $errors['gia_dich_vu'] = 'Tên giá không được để trống';  
                }

                if(empty($errors)) {
                    $this -> modelDichVu -> InsertDichVu($ten_dich_vu, $gia_dich_vu, $mo_ta);
                    header("location:".BASE_URL_ADMIN.'?act=dichvu');
                    exit();
                } else {
                    require_once './views/dichvu/addDichVu.php';
                }
            }
        }

        function formUpdateDichVu($id) {
            $onedichvu = $this -> modelDichVu -> getOneDichVu($id);
            require_once './views/dichvu/updateDichVu.php';
        }

        function updateDichVu($id) {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ten_dich_vu = $_POST['ten_dich_vu'];
                $gia_dich_vu = $_POST['gia_dich_vu'];
                $mo_ta = $_POST['mo_ta'];
                
                $errors = [];
                if(empty($ten_dich_vu)) {
                    $errors['ten_dich_vu'] = 'Tên dịch vụ không được để trống';
                }
                if(empty($gia_dich_vu)) {
                    $errors['gia_dich_vu'] = 'Giá tiền không được để trống';  
                }

                if(empty($errors)) {
                    $this -> modelDichVu -> UpdateDichVu($id, $ten_dich_vu, $gia_dich_vu, $mo_ta);
                    header("location:".BASE_URL_ADMIN.'?act=dichvu');
                    exit();
                } else {
                    $onedichvu = ['id' => $id, 'ten_dich_vu' => $ten_dich_vu, 'gia_dich_vu' => $gia_dich_vu, 'mo_ta' => $mo_ta];
                    require_once './views/dichvu/updateDichVu.php';
                }
            }
        }

        function deleteDichVu($id) {
            $this -> modelDichVu -> DeleteDichVu($id);
            header("location:".BASE_URL_ADMIN.'?act=dichvu');
        }
    }
?>