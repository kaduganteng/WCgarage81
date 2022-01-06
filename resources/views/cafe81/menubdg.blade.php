@extends('layouts.cafebdg')
@section('section')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
</head>

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
    style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Menu Kami</h1>
                        <div class="h2tagline">
                            <h2>Cafe</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>

<body>
    <div class="container">
        <div id="fh5co-featured-menu" class="fh5co-section">
            <div class="container">
                <div class="row">
                    <div id="fh5co-featured-menu" class="fh5co-section">
                        <div class="container">
                            <div class="row">
                                <div class="section-heading">
                                    <h2>Menu Special</h2>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab
                                                debitis sit
                                                itaque totam, a maiores nihil, nulla magnam porro minima officiis!
                                                Doloribus aliquam
                                                voluptates corporis et tempora consequuntur ipsam,
                                                itaque, nesciunt similique commodi omnis. Ad magni perspiciatis,
                                                voluptatum repellat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuspesial">



                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                                        @foreach ($menubdg as $m)
                                        <div class="fh5co-item animate-box">

                                            <a href="{{ asset('upload/' . $m->foto_menu) }}" class="fancybox"
                                                data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                <img src="{{ asset('upload/' . $m->foto_menu) }}" class="img-fluid mb-2"
                                                    alt="white sample" width="100px" height="100px" />
                                                <h3>{{ $m->nama }}</h3>
                                                <span class="fh5co-price">{{ $m->harga }}</sup></span>
                                                <p>{!! $m->keterangan !!}</p>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/js/demo.js"></script>
@endsection