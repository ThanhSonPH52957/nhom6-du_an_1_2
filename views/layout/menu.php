<!-- Start Header Area -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
button{
    margin: 0 6px;
    padding: 2px 6px;
    background-color: #ffc107;
    border: none;
    
}
form{
    display: flex;
}
form input{
    width: 100px;
}
    body {
        font-family: Arial, sans-serif;
        margin: 0 auto;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        background-color: #fff;
        border-bottom: 1px solid #ccc;
    }

    .logo img {
        width: 60px;
        height: auto;
    }

    .main-nav {
        display: flex;
        align-items: center;
    }

    .main-nav a {
        text-decoration: none;
        color: #000;
        margin: 0 15px;
        font-size: 16px;
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 1000;
        min-width: 150px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        display: block;
        padding: 10px;
        color: #000;
        text-decoration: none;
        font-size: 14px;
        white-space: nowrap;
    }

    .header-actions {
        display: flex;
        align-items: center;
    }

    .search-box {
        padding: 5px;
        border: 1px solid #d1b536;
        border-radius: 3px;
        font-size: 14px;
        margin-right: 15px;
    }

    .header-button {
        text-decoration: none;
        color: #000;
        margin: 0 5px;
        font-size: 16px;
        transition: color 0.3s;
    }

    .header-button:hover {
        color: white;
    }
</style>
<header class="header-area header-wide">

    <div class="header-container">
        <a href="?act=/" class="logo">
            <img src="./assets/img/logo/LOGO.png" alt="PH Management Logo">
        </a>
        <nav class="main-nav">
            <a href="?act=/">Trang chủ</a>
            <div class="dropdown">
                <a href="?act=phong">Phòng</a>
                <div class="dropdown-content">
                    <a href="#">Phòng đơn</a>
                    <a href="#">Phòng đôi</a>
                    <a href="#">Phòng VIP</a>
                </div>
            </div>
            <a href="?act=dichvu">Dịch vụ</a>
            <a href="?act=lienhe">Liên hệ</a>
            <a href="?act=gioithieu">Giới thiệu</a>
        </nav>
        <div class="header-actions">
            <form action="?act=timphong" method="Post">
                <input  type="text" placeholder="Tìm kiếm" name="search" class="search-box">
                <button type="submit" class="header-button"  >Tìm kiếm</button>
            </form>
<button>  <a href="?act=datphong" class="header-button">Đặt phòng</a></button>
<button> <a href="?act=dangky" class="header-button">Đăng ký</a></button>     
<button>  <a href="?act=dangnhap" class="header-button">Đăng nhập</a>
</button>       
 </div>
    </div>
</header>