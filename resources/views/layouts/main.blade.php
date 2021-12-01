<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ongkir App</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="menu_btn" id="menu_btn"></div>

        <!-- Navigation Bar -->
        <div class="top_panel">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="mobile-btn" id="mobile-btn"></div>
                    <div class="top_left">
                        <a href="/" class="logo">
                            <img src="img/logo-nav.png" alt="">
                        </a>
                        <div class="menu" id="menu">
                            <div class="close"></div>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/estimate">Cek Ongkir</a></li>
                                <li><a href="/about">Tentang Kami</a></li>
                                <li><a href="/contact">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top_right top_left">
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Page -->
        <div class="mainpage">
            @yield('mainpage')
        </div>

        <footer class="footer">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="footer_top">
                        <div class="top_left logo"></div>
                    </div>
                    <div class="footer_center">
                        <div class="subscribe">
                            <p>Subscribe to the latest news</p>
                            <div class="subscribe_form">
                                <form class="flex">
                                    <input type="text" placeholder="Email Address">
                                    <button class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="socials">
                            <a href="#" class="instagram"></a>
                            <a href="#" class="twitter"></a>
                            <a href="#" class="pinterest"></a>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="left">
                            © Copyright 2021 - Ongkir App
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.arcticmodal.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>