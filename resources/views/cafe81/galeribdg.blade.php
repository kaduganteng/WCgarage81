@extends('layouts.cafebdg')
@section('section')

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
                    <div class="col-md-12 fh5co-heading animate-box">

                    </div>
                    @foreach ($galeribdgfe as $g)
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                        <div class="fh5co-item animate-box">


                            <div class="item col-sm-2">

                                <a href="{{ asset('upload/'. $g->foto_galeri ) }}" class="fancybox"
                                    data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                    <img src="{{ asset('upload/'. $g->foto_galeri) }}" class="img-fluid mb-2"
                                        alt="white sample" width="200px" height="200px" />
                                </a>
                            </div>


                        </div>

                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</body>
@endsection