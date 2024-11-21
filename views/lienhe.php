<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    .breadcrumb {
        padding: 10px;
        background-color: #eee;
        font-size: 14px;
    }

    .breadcrumb a {
        text-decoration: none;
    }

    .contact {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 0;
        background-color: #f9f9f9;
    }

    .contact-container {
        display: flex;
        width: 80%;
        max-width: 1200px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .contact-form {
        flex: 1;
        padding: 30px;
        border-right: 2px solid #e5e5e5;
    }

    .contact-form h2 {
        margin-bottom: 20px;
        font-size: 20px;
    }

    .contact-form p {
        margin-bottom: 20px;
        color: #666;
    }

    .contact-form,
    .contact-info {
        width: 48%;
    }

    .contact-form form {
        display: flex;
        flex-direction: column;
    }

    .contact-form label {
        margin-top: 10px;
        font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .contact-form textarea {
        resize: vertical;
        height: 100px;
    }

    .contact-form button {
        width: 100%;
        padding: 10px;
        background-color: #000;
        color: #fff;
        border: none;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-info {
        flex: 1;
        background-color: #000;
        color: #fff;
        padding: 30px;
        position: relative;
    }

    .contact-info h2 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .contact-info p {
        margin-bottom: 15px;
        font-size: 14px;
    }

    .map iframe {
        margin: 20px 0;
        width: 100%;
        height: 400px;
        border: 0;
    }

    .contact-form button:hover {
        background-color: #444;
    }

    .contact-info::before {
        content: "";
        position: absolute;
        top: 0;
        left: -10px;
        width: 10px;
        height: 100%;
        background-color: #caa653;
    }
</style>
<main>
    <div class="breadcrumb">
        <a href="?act=home">Trang chủ</a> > <span>Liên hệ</span>
    </div>

    <section class="contact">
        <div class="contact-container">
            <div class="contact-form">
                <h2>Thông tin liên hệ</h2>
                <p>Hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi
                    nhận được.</p>
                <form action="function/process_lienhe.php" method="POST">
                    <label for="name">Họ và tên *</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Nội dung *</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Gửi liên hệ</button>
                </form>
            </div>
            <div class="contact-info">
                <h2>Thông tin</h2>
                <p>70 Lữ Gia, Phường 15, Quận 11, Thành phố Hồ Chí Minh</p>
                <p>1900 6750</p>
                <p>support@sapo.com</p>
                <p>Mở cửa 24/24</p>
            </div>
        </div>
    </section>

    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.652547689599!2d106.642176074821!3d10.762935492319095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eb4317814db%3A0x4891db5c2cb82890!2zNzAgTC4gTMO7IEdpYSwgUGjGsOG7nW5nIDE1LCBRdeG6rW4gMTEsIEjDsmMgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1699793167383!5m2!1svi!2s"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
</main>

<?php require_once 'layout/footer.php'; ?>