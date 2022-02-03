@extends('layouts.cafecmh')
@section('section')


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

<!-- Theme style -->
<link rel="stylesheet" href="adminlte/css/adminlte.min.css">

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/cmhgaleri.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Garage 81 Cimahi</h1>
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
                <div class="col-md-12 fh5co-heading animate-box">
                    <h1>Our Gallery</h1>

                </div>
                <div class="card-body">
                    <div class="row">

                        @foreach ($gcmh as $g)
                        <div class="item col-sm-2">

                            <a href="{{ asset('upload/'. $g->foto_cmh ) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                <img src="{{ asset('upload/'. $g->foto_cmh) }}" class="img-fluid mb-2" alt="white sample" width="200px" height="200px" />
                            </a>
                        </div>
                        @endforeach


                    </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/js/demo.js"></script>

@endsection