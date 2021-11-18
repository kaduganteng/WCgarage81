<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Web Garage 81 </title>
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
                        <div id="fh5co-logo"><a href="index.html">Garage 81<span>.</span></a></div>
                    </div>
                    <div class="col-xs-12 text-center menu-1 menu-wrap">
                        <ul>
                            <li class="active"><a href="{{ route('landing') }}">Home</a></li>
                            <li><a href="menu.html">Menu</a></li>
                            <li class="has-dropdown">
                                <a href="gallery.html">Gallery</a>
                                <ul class="dropdown">
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Coffees</a></li>
                                </ul>
                            </li>
                            <li><a href="reservation.html">Reservation</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- </div> -->
        </nav>

        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <h1>The Best Coffee <em>&amp;</em> Restaurant <em>in</em> Bandung</h1>
                                <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">Garage 81</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="body">
            @yield('section')
        </div>
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
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