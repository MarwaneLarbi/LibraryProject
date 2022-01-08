<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="../../../">
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Biblio</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/media/logos/red.png" type="image/png">
    <!--====== Bootstrap css ======-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!--====== FontAwesoem css ======-->
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--====== Jquery ui css ======-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link href="assets/css/paginate.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

    @livewireStyles

</head>
<body>
<!--====== Start Preloader ======-->
<div class="preloader">
    <div class="loader">
        <img src="assets/media/logos/red.png" alt="loader" width="450px" height="150px">
        <h4> chargement..</h4>
    </div>
</div>
<!--====== End Preloader ======-->
<!--====== Start Header Section ======-->
<header class="header-area header-area-two" style=" background: #cccccc2e;">
    <div class="header-navigation">
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-5">
                        <div class="site-branding">
                            <a href="http://localhost:8000/" class="brand-logo"><img src="assets/media/logos/red.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-2">
                        <div class="nav-menu">
                            <div class="navbar-close"><i class="ti-close"></i></div>
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item"><a href="http://localhost:8000/">Accueil</a></li>
                                    <li class="menu-item"><a href="http://localhost:8000/livres">Livres</a></li>
                                    <li class="menu-item"><a href="http://localhost:8000/categories">Categories</a></li>
                                    <li class="menu-item"><a href="http://localhost:8000/blog1">Inscription</a></li>
                                    <li class="menu-item"><a href="http://localhost:8000/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <div class="header-right-nav">
                            <ul class="d-flex align-items-center">
                                <li class="user-btn"><a href="http://localhost:8000/login" class="icon"><i class="flaticon-avatar"></i></a></li>
                                <li class="nav-toggle-btn">
                                    <div class="navbar-toggler">
                                        <span></span><span></span><span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Header Section ======-->
@yield('content')
<!--====== Start Footer ======-->
<footer class="footer-area">
    <div class="footer-wrapper-one dark-black pt-90">
        <div class="footer-widget pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget about-widget mb-40">
                            <h4 class="widget-title">Mobile Experience</h4>
                            <ul class="button">
                                <li>
                                    <a href="#" class="app-btn android-btn">
                                        <div class="icon">
                                            <i class="ti-android"></i>
                                        </div>
                                        <div class="info">
                                            <span>get it on</span>
                                            <h6>Goole Play</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="app-btn apple-btn">
                                        <div class="icon">
                                            <i class="ti-apple"></i>
                                        </div>
                                        <div class="info">
                                            <span>get it on</span>
                                            <h6>App Store</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="footer-social">
                                <h4>Follow Us</h4>
                                <ul class="social-link">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4     col-md-7 col-sm-12">
                        <div class="widget categories-widget mb-40">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="categories-link">
                                <li><a href="http://localhost:8000/livres/category/1">Computers & Technology</a></li>
                                <li><a href="http://localhost:8000/livres/category/2">Arts & Photography</a></li>
                                <li><a href="http://localhost:8000/livres/category/3">Medical Books</a></li>
                                <li><a href="http://localhost:8000/livres/category/4">Science & Math</a></li>
                                <li><a href="http://localhost:8000/livres/category/5">Children's Books</a></li>
                                <li><a href="http://localhost:8000/livres/category/6">Self-Help</a></li>
                                <li><a href="http://localhost:8000/livres/category/7">Sports & Outdoors</a></li>
                                <li><a href="http://localhost:8000/livres/category/8">History</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget newsletter-widget mb-40">
                            <h4 class="widget-title">Newsletter</h4>
                            <p>Caoreet massa torto pon interdum
                                sestibulum suscipit duis.</p>
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Enter Email" name="email" required>
                                </div>
                                <div class="form_group">
                                    <button class="main-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021. Tous droits réservés à <span>Bibliothèque Tlemcen
</span></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-link">
                            <ul>
                                <li><a href="#">Terms & Conditins</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->
<!--====== back-to-top ======-->
<a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<!--====== Popper js ======-->
<script src="assets/js/popper.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="assets/js/bootstrap.min.js"></script>
<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>
<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--====== Isotope js ======-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--====== Imagesloaded js ======-->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!--====== counterup js ======-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--====== waypoints js ======-->
<script src="assets/js/jquery.waypoints.js"></script>
<!--====== Ui js ======-->
<script src="assets/js/jquery-ui.min.js"></script>
<!--====== Wow js ======-->
<script src="assets/js/wow.min.js"></script>
<!--====== Main js ======-->
<script src="assets/js/main.js"></script>
<script src="assets/js/luckmoshyJqueryPagnation.js"></script>
<script src="assets/js/custom/paginate.min.js"></script>

<script src="assets/plugins/global/plugins.bundle.js"></script>

@livewireScripts
@stack('scripts')
</body>
</html>
