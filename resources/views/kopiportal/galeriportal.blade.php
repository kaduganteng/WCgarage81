@extends('layouts.kopiportal')
@section('section')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

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
        <div id="fh5co-gallery" class="fh5co-section">
            <div class="container">
                <div class="row">
        <div class="col-md-12 fh5co-heading animate-box">
            <h2>Galeri</h2>
            <div class="row">
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam,
                        itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
                </div>
            </div>
        </div>

                    @foreach ($galeriportal as $g)
                    <div class="col-md-3 col-sm-3 fh5co-gallery_item animate-box">
                        <div class="fh5co-bg-img">
                        <a href="{{ asset('upload/'. $g->foto_kopip ) }}" class="fancybox" data-fancybox="ggblg"
                            data-gallery="gallery" height="150px" width="100px">
                            <img src="{{ asset('upload/'. $g->foto_kopip) }}" data-trigger="zoomerang" class="img-responsive" alt="galerigarasi81" />
                        </a>
                    </div>
                    </div>
                    @endforeach
        </div>
</body>
@endsection