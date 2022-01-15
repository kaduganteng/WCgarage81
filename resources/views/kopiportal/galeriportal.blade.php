@extends('layouts.kopiportal')
@section('section')

<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</head>
<style>
    img {
        width: 1000px;
    }
</style>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
    style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Galeri</h1>
                        <div class="h2tagline">
                            <h2>Cafe</h2>
                        </div>
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
                    @foreach ($galeriportal as $g)
                    <div class="item col-sm-2">
                        <a href="{{ asset('upload/'. $g->foto_bdg ) }}" class="fancybox" data-fancybox="ggblg"
                            data-gallery="gallery" height="100px" width="100px">
                            <img src="{{ asset('upload/'. $g->foto_bdg) }}" class="img-fluid mb-2" alt="white sample"
                                width="300px" height="1000px" />
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</body>
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<script src="dist/js/lightbox-plus-jquery.min.js"></script>
@endsection