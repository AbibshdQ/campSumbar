<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashbor</title>
    <link rel="stylesheet" href="/css/rental.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">OneDayteam</a></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="/perlengkapan">Rental/Penyewaan</a></li>
                <li><a href="/promo">Promo</a></li>
                <li><a href="#">Lainnya</a></li>
            </ul>
            <a href="/login" class="action_btn">get Started</a>
            <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        </div>
    </header>

    <div class="gambar">
        <div class="gambar-text">
            <form action="/search" method="GET">
                <input type="text" name="search" placeholder="Cari...">
                <input type="submit" value="Cari">
            </form>

            <h1>OUTDOOR RENTAL SUMBAR</h1>
            <p>Melayani rental/sewa alat camping/kemah terlengkap di Sumatra Barat</p>
        </div>
    </div>

    <div class="textj">
        <h1>DAFTAR TOKO RENTAL</h1>
    </div>
    <div class="card-container">
        <div class="cards">
            <div class="card">
                <img src="/images/gambar7.jpg" alt="Card 1">
                <div class="card-content">
                    <h3>Tenda 4 Orang Waterproof</h3>
                </div>
            </div>

            <div class="card">
                <img src="/images/gambar7.jpg" alt="Card 1">
                <div class="card-content">
                    <h3>Tenda 4 Orang Waterproof</h3>
                </div>
            </div>

            <div class="card">
                <img src="/images/gambar7.jpg" alt="Card 1">
                <div class="card-content">
                    <h3>Tenda 4 Orang Waterproof</h3>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
        <p>&copy; 2023 OneDayteam. All rights reserved.</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
