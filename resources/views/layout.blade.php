<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/sunzine/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Oct 2023 06:19:21 GMT -->

<head>
    <title>Pilai</title>
    <meta charset="UTF-8">
    <meta name="description" content="SUNZINE Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <a href="/" class="site-logo">
            <img src="{{ asset('frontend/img/logo.png') }}" alt>
        </a>
        <nav class="mobile__menu"></nav>
    </div>


    <header class="header">
        <div class="header__warp">
            <a href="/" class="site-logo">
                <img src="{{ asset('frontend/img/logo.png') }}" alt>
            </a>
            <div class="header__right">
                <nav class="main__menu">
                    <ul>
                        <li><a href="/" class="menu--active">Home</a></li>
                        <li><a href="#">Browse all</a></li>
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="header__switches">
                    <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    <footer class="footer__section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/" class="footer__logo">
                        <img src="{{ asset('frontend/img/footer-logo.png') }}" alt>
                    </a>
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-3">
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>

        </div>
    </div>


    <script src="{{ asset('frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
