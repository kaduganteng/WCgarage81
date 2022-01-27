@extends('layouts.cafecmh')
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
                        <h1>Menu Kami</h1>
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

    <div id="fh5co-featured-menu" class="fh5co-section">
        <div class="container">
                <div class="col-md-12 fh5co-heading animate-box">
                    <h2>Daftar Menu</h2>
                    <div class="row">
                        <div class="col-md-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit
                                    itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam
                                    voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique
                                    commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($menucmh as $m)
                     <div class="menuspesial">
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                            <div class="fh5co-item">

                            <a href="{{ asset('upload/' . $m->foto_menu) }}" class="fancybox" data-fancybox="ggblg"
                                data-gallery="gallery" height="50px" width="50px">
                                <img src="{{ asset('upload/' . $m->foto_menu) }}" class="img-fluid m-auto"
                                    alt="white sample" width="200px" height="170px"/>
                                <h3>{{ $m->nama }}</h3>
                                <span class="fh5co-price">{{ $m->harga }}</sup></span>
                                <p>{!! $m->keterangan !!}</p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</body>
@endsection