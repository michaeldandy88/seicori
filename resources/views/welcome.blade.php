<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seicori Coffee</title>
    <link rel="stylesheet" href="{{ ('styles.css') }}" />
</head>
<body>
    <header>
        <img src="logo-seicori.png" alt="Seicori Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#brand">Brand</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="hero">
            <img src="landing page.png" alt="landing" class="landing">
        </section>
        <section id="menu">
            <div class="menu-item">
                <img src="seicori2.jpg" alt="Es Kopi Rantau">
                <h3>Es Kopi Rantau</h3>
                <p>Kopi susu dengan cita rasa yang creamy</p>
                <button onclick="lihatMenu('rantau')">Detail</button>
                <div id="menu-rantau" style="display: none;">
                    <h2>Harga Rp 13.000,00</h2>
                    <i class="fa-coffee"></i>
                </div>
            </div>
            <div class="menu-item" id="melayu" style="display: block;">
                <img src="seicori3.jpg" alt="Es Kopi Rantau">
                <h3>Es Milo Melayu</h3>
                <p>Minuman dengan cita rasa coklat yang malt</p>
                <button onclick="lihatMenu('melayu')">Detail</button>
                <div id="menu-melayu" style="display: none;">
                    <h2>Harga Rp 15.000,00</h2>
                </div>
            </div>
        </section>
        <section id="about">
            <h2>Tentang Kami</h2>
            <div class="info">
                <div>
                    <p>Website</p>
                    <a href="https://seicori.id">www.seicori.id</a>
                </div>
                <div class="sosmed">
                    <p>Social Media</p>
                    <p><i class=fa-instagram> <a href="https://instagram.com/seicori_" target="_blank">@seicori_</a></i></p>
                </div>
                <div class="order">
                    <p>Order App</p>
                        <p>ShopeeFood</p>
                        <p>GoFood</p>
                        <p>GrabFood</p>
                </div>
                <div class="jadwal">
                    <p><b>Jadwal Buka</b></p>
                        <p>Ora - Oro Dawo: 07:00 - 23:00 WIB</p>
                        <p>Kayutangan: 07:00 - 23:00 WIB</p>
                        <p>Gajayana: 07:00 - 23:00 WIB</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img src="seicori4.jpg" alt="Seicori Coffee Shop" class="footer-image">
        <p>&copy; 2023 Seicori Coffee. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
