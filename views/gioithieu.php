<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .breadcrumb {
        padding: 10px;
        background-color: #eee;
        font-size: 14px;
    }

    .breadcrumb a {
        text-decoration: none;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
    }

    .hotel-image {
        display: block;
        max-width: 100%;
        margin: 20px auto;
        border: 1px solid #ddd;
    }
</style>
<main>
    <div class="breadcrumb">
        <a href="?act=home">Trang chủ</a> > <span>Liên hệ</span>
    </div>
    </div>
    <section class="gioi-thieu">
        <div class="container">
            <h1>Về chúng tôi</h1>
            <p>Là khách sạn 5 sao đẳng cấp quốc tế, tọa lạc tại giao điểm của bốn quận chính, nơi được xem như trái tim
                và trung tâm của TP. Hồ Chí Minh.</p>
            <img src="./assets/img/logo/gioithieu.png" alt="Sảnh khách sạn" class="hotel-image">

            <p>Với hệ thống phòng tiêu chuẩn và phòng hạng sang thiết kế đẹp mắt và trang nhã, chúng tôi chú trọng từng
                chi tiết để đem lại sự tiện nghi và thoải mái tối đa cho quý khách.</p>

            <p><b>Bean Hotel</b> tích hợp đầy đủ các dịch vụ cho quý khách có một chuyến công tác hoặc kỳ nghỉ thật sự
                tiện ích như nhà hàng, phòng hội nghị, hồ bơi, dịch vụ đón tiễn sân bay, các tour du lịch, chơi golf, và
                vé máy bay với chất lượng tốt nhất.</p>

            <p>Cùng với đội ngũ nhân viên chuyên nghiệp, <b>Bean Hotel</b> hứa hẹn sẽ mang đến cho quý khách sự hài lòng
                nhất.</p>

            <p><b>Hãy đến Bean Hotel để trải nghiệm sự khác biệt!</b></p>
        </div>
    </section>
</main>

<?php require_once 'layout/footer.php'; ?>