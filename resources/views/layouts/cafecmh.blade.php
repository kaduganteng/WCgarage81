<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Manajemen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="portal/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="portal/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="portal/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="portal/css/flexslider.css">


    <!-- Theme style  -->
    <link rel="stylesheet" href="portal/css/style.css">

    <!-- Modernizr JS -->
    <script src="portal/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <!-- <div class="top-menu"> -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center logo-wrap">
                        <div id="fh5co-logo"><a href="{{ route('landing') }}"><span>. </span> Portal Manajemen <span>
                                    .</span></a></div>
                    </div>
                    <div class="col-xs-12 text-center menu-1 menu-wrap">
                        <ul>
                            <li class="active">
                            <li><a href="{{ route('cafecmh') }}">Home</a></li>
                            <li><a href="{{ route('menucmhfe') }}">Menu</a></li>
                            <li><a href="{{ route('galericmhfe') }}">Galeri</a></li>
                            <li><a href="{{ route('tentangcmh') }}">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
             </div>  
      </nav>
            <!-- </div> -->
         @yield('section')
    </div>

    <!--Footer-->
    <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-4 fh5co-widget">
                    <h4>Portal Manajemen</h4>
                    <p>Jl. Bali No.3, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113</p>
                </div>
                <div class="col-md-2 col-md-push-1 fh5co-widget">
                    <h4>Links</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="{{ route('landing') }}">Home</a></li>
                        <li><a href="{{ route('aboutportal') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('contactportal') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-md-push-1 fh5co-widget">
                    <h4>Brand Kami</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="{{ route('cafecmh') }}">Garage 81 Cimahi</a></li>
                        <li><a href="{{ route('cafe81') }}">Garasi 81 Bandung</a></li>
                        <li><a href="{{ route('kopiprt') }}">Kopi Portal</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-md-push-1 fh5co-widget">
                    <h4>Contact Information</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">+62 859202355668</a></li>
                        <li><a href="#">portalmanajemen@gmail.com</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; Portal Manajemen 2021. All Right Reserved. </small>
                        <small class="block">Designed by BKK Corp</a></small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><img src={{url('/images/twit.png')}} width="23px" height="23px"></a></li>
                        <li><a href="#"><img src={{url('/images/icon_ins.png')}} width="23px" height="23px"></a></li>
                        <li><a href="#"><img src={{url('/images/fb.png')}} width="18px" height="18px"></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top animate-box">
        <a href="https://api.whatsapp.com/send?phone=+6285938529515&amp;text=hello" class="float" target="_blank"><i class="icon-whatsapp"></i></a>
    </div>

    <!-- jQuery -->
    <script src="portal/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="portal/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="portal/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="portal/js/jquery.waypoints.min.js"></script>
    <!-- Waypoints -->
    <script src="portal/js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="portal/js/jquery.flexslider-min.js"></script>
    <!-- Main -->
    <script src="portal/js/main.js"></script>
    
</body>

</html>