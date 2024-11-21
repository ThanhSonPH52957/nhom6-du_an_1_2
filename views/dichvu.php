<?php
include_once "layout/header.php";
?>
<?php
include_once "layout/menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img1 {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            object-position: center;
        }

        .phong {
            padding: 10px 10px;
            width: 1250px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: gainsboro;
            border-radius: 8px;
            margin: 25px 0;
        }

        .phong1 {
            display: flex;
            flex-direction: row;
        }

        .phong1 p {
            margin: 5px;
        }

        .container h1 {
            margin: 30px 0;
            text-align: center;
            font-size: 1.8em;
            color: #d46a6a;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 80px;
            margin-bottom: 40px;
        }

        .card {
            width: 250px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card p {
            padding: 15px;
            color: #555;
        }
    </style>
    <section>
        <div class="img1">
            <img class="img" src="https://cdn.pixabay.com/photo/2017/03/09/06/30/pool-2128578_640.jpg" alt="">
        </div>
    </section>
    <section>
        <div class="phong">
            <h3>
                Dịch Vụ
            </h3>
            <div class="phong1">
                <p>Sắp xếp</p>
                <p>Mặc định</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div>
                <h1>Hội Nghị - Cưới Hỏi</h1>
                <div class="grid">
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/to-chuc-tiec-hoi-nghi-hoi-thao-cao-cap.jpg?v=1670341379893" alt="Tổ chức tiệc hội nghị">
                        <p>Tổ chức tiệc hội nghị, hội thảo cao cấp</p>
                    </div>
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/to-chuc-tiec-cuoi-ket-noi-nhan-duyen.jpg?v=1670341337250" alt="Tổ chức tiệc cưới">
                        <p>Tổ chức tiệc cưới - kết nối nhân duyên</p>
                    </div>
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/to-chuc-tiec-cuoi-ngoai-troi.jpg?v=1670341251877" alt="Tổ chức tiệc cưới ngoài trời">
                        <p>Tổ chức tiệc cưới ngoài trời</p>
                    </div>
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/goi-hoi-nghi-hoi-thao-to-chuc-trong-ngay.jpg?v=1670341205840" alt="Gói hội nghị, hội thảo">
                        <p>Gói hội nghị, hội thảo tổ chức trong ngày</p>
                    </div>
                </div>

                <h1>Sức Khỏe - Làm Đẹp</h1>
                <div class="grid">
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/massa-thu-gian-da-nong.jpg?v=1670341861677" alt="Massage thư giãn">
                        <p>Ngâm dưỡng kết hợp massage thư giãn với đá nóng</p>
                    </div>
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/tam-trang-va-duong-da-toan-than.jpg?v=1670341775100" alt="Liệu trình spa">
                        <p>Tắm trắng với liệu pháp dưỡng da toàn thân</p>
                    </div>
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/massa-tinh-dau.jpg?v=1670341723720" alt="Massage toàn thân">
                        <p>Massage toàn thân bằng thảo dược và tinh dầu tự nhiên</p>
                    </div>
                    <div class="card">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/472/947/articles/tay-te-bao-chet-voi-cam-gao.jpg?v=1670341667380" alt="Tẩy tế bào chết">
                        <p>Tẩy tế bào chết bằng bùn thiên nhiên, ngải cứu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
include_once "layout/footer.php";
?>