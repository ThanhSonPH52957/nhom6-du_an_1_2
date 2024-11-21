<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<style>
    .banner {
        width: 100%;
        height: 400px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .banner img {
        width: 1400px;
        height: 100%;
    }

    .container {
        max-width: 1200px;
        margin: auto;
    }

    nav {
        font-size: 14px;
        margin-bottom: 20px;
    }

    nav a {
        text-decoration: none;
        color: #007bff;
        margin-right: 5px;
    }

    nav a:hover {
        text-decoration: underline;
    }

    .header {
        display: flex;
        gap: 20px;
    }

    .header img {
        width: 60%;
        border-radius: 10px;
        object-fit: cover;
    }

    .header .details {
        flex: 1;
    }

    .details p {
        margin: 10px 0;
    }

    .details .services {
        margin-top: 10px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .services span {
        background: #f4f4f4;
        border-radius: 5px;
        padding: 5px 10px;
        display: inline-block;
        font-size: 14px;
        color: #555;
    }

    .similar-rooms {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }

    .similar-rooms .room,
    .featured-rooms .room {
        flex: 1;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        text-align: center;
        background: #f9f9f9;
    }

    .room img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .room p {
        margin: 5px 0;
        font-size: 16px;
        color: #333;
    }

    .room a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .room a:hover {
        text-decoration: underline;
    }
</style>
<main>
    <div class="container">
        <nav>
            <a href="?act=/">Trang chủ</a> > <a href="/phong.php">Phòng đơn</a> > Phòng đơn tiêu chuẩn
        </nav>
        <div class="banner">
            <img src="../assets/img/logo/banner.png" alt="Banner khách sạn">
        </div>

        <div class="header">
            <img src="../assets/img/logo/ảnh phòng 1.png" alt="Phòng đơn tiêu chuẩn">
            <div class="details">
                <h1>Phòng đơn tiêu chuẩn</h1>
                <p><strong>02 Người lớn:</strong> 2</p>
                <p><strong>01 Trẻ em:</strong> 1</p>
                <p><strong>Diện tích:</strong> 20m²</p>
                <div class="services">
                    <span>Cafe Buổi Sáng</span>
                    <span>Bồn Tắm Hoa Sen</span>
                    <span>Internet Không Dây</span>
                </div>
            </div>
        </div>

        <h2>Mô tả</h2>
        <p>
            Các phòng trang nhã và đầy đủ tiện nghi của chúng tôi gợi nhớ về một thời đại đã qua...
        </p>

        <h2>Phòng tương tự</h2>
        <div class="similar-rooms">
            <div class="room">
                <img src="../assets/img/logo/ảnh phòng 2.png" alt="Phòng 1">
                <p>Phòng Đơn Vip</p>
                <p>Giá: 2,500,000 VND/đêm</p>
                <a href="#">Xem chi tiết</a>
            </div>
            <div class="room">
                <img src="../assets/img/logo/ảnh phòng 3.png" alt="Phòng 2">
                <p>Phòng Đôi Cao Cấp</p>
                <p>Giá: 3,000,000 VND/đêm</p>
                <a href="#">Xem chi tiết</a>
            </div>
        </div>

        <h2>Phòng tốt nhất</h2>
        <div class="featured-rooms">
            <div class="room">
                <img src="images/phong-tot-1.jpg" alt="Phòng tốt nhất 1">
                <p>Phòng Hạng Sang</p>
                <p>Giá: 5,000,000 VND/đêm</p>
                <a href="#">Xem chi tiết</a>
            </div>
        </div>
    </div>
</main>


<?php require_once 'layout/footer.php'; ?>