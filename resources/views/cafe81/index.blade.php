@extends('layouts.cafebdg')
@section('section')
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/garasi81.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Garasi 81 Bandung</h1>
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
    <!--Deskripsi garage 81 -->
    <div id="fh5co-about" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-pull-0 img-wrap animate-box" data-animate-effect="fadeInLeft">
                    <img src="images/frn.png">
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="section-heading">
                        <h2>Garasi 81</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at
                            deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut
                            laudantium alias, laboriosam excepturi, et nmquam? Atque tempore iure tenetur perspiciatis,
                            aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo
                            vero nesciunt. Sunt!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis
                            laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Deskripsi garage 81 -->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--Menu Spesial Garage 81-->
    <div id="fh5co-featured-menu" class="fh5co-section">
        <div class="container">
            <div class="col-md-12 fh5co-heading animate-box">
                <div class="section-heading">
                    <h2>Menu Special</h2>
                    <div class="row">
                        <div class="col-md-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit
                                itaque totam, a maiores nihil, nulla magnam porro minima offiiis! Doloribus aliquam
                                voluptates corporis et tempora consequuntur ipsam,
                                itaque, nesciunt similique commodi omnis. </p>
                        </div>
                    </div>
                </div>
                <div class="menuspesial">
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                        <div class="fh5co-item">
                            <a href="{{ route('cafe81') }}">
                                <img src="images/ayamlada.jpg" class="img-responsive">
                                <h3>Nasi Ayam Lada Hitam</h3>
                                <span class="fh5co-price">Rp.20.000</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut
                                    vero alias quaerat inventore molestias vel suscipit explicabo.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-15 fh5co-item-wrap animate-box">
                        <div class="fh5co-item margin_top">
                            <a href="{{ route('cafe81') }}">
                                <img src="images/jagong.jpg" class="img-responsive">
                                <h3>Beef Hot Pot</h3>
                                <span class="fh5co-price">Rp.27.000</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut
                                    vero alias quaerat inventore molestias vel suscipit explicabo.</p>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                        <div class="fh5co-item">
                            <a href="{{ route('cafe81') }}">
                                <img src="images/nasgor.jpg" class="img-responsive">
                                <h3>Nasi Goreng</h3>
                                <span class="fh5co-price">Rp.30.000</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut
                                    vero alias quaerat inventore molestias vel suscipit explicabo.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                        <div class="fh5co-item margin_top">
                            <a href="{{ route('cafe81') }}">
                                <img src="images/spageti.jpg" class="img-responsive">
                                <h3>Spagheti BBQ</h3>
                                <span class="fh5co-price">Rp.25.000</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut
                                    vero alias quaerat inventore molestias vel suscipit explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Menu Spesial Garasi 81-->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
    <div id="fh5co-slider" class="fh5co-section animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="fh5co-heading">
                        <h2>Our Best <em>&amp;</em> Unique Menu</h2>
                        <p>Lorem ipsum dolor sit amet, consctetur adipisicing elit. Reiciendis ab debtis sit itaque
                            totam,sdds a maiores nihil, nulla magnam porro minima officiis!</p>
                    </div>
                </div>
                <div class="col-md-6 col-md-push-1 animate-box">
                    <aside id="fh5co-slider-wrwap">
                        <div class="flexslider">
                            <ul class="slides">
                                @foreach ($menubdg as $menu)
                                <li style="background-image: ;">
                                    <div class="overlay-gradient">
                                        <img src="{{ asset('upload/'. $menu->foto_menu ) }}" alt="">
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div
                                                class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                                <div class="slider-text-inner">

                                                    <div class="desc">
                                                        <h2>{{ $menu->nama }}</h2>
                                                        <p>{!! $menu->keterangan !!}</p>
                                                        <p><a href="{{ route('menubdgfe') }}"
                                                                class="btn btn-primary btn-outline">Lihat</a></p>
                                                    </div>
                                              

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--Menu Terlaris Garage 81-->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--Instagram-->
    <div class="container" class="animate-box" data-animate-effect="fadeInLeft">
    <div data-mc-src="29d00edc-e38a-4910-b28a-f4d5b32e8fa7#instagram">
    </div>
    </div>
    
    <script 
    src="https://cdn2.woxo.tech/a.js#61cd5af958bb730016c7f4e2" 
    async data-usrc>
    </script>
    <!--Instagram-->

    <!--Gmaps Garasi 81-->
    <div class="container">
        <div class="section-heading gmaps"> 
    <h2> Lokasi Kami </h2>
        <div class="embed-responsive embed-responsive-4by3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.802245020897!2d107.61473781530074!3d-6.914232169593771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e71d2ba0ef41%3A0x3b67257e4e181cce!2sGarasi%2081%20Bandung!5e0!3m2!1sid!2sid!4v1642593765069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
                </div>
            </div>
        </div>
    </div>
<!--Gmaps Garasi 81-->

</body>
@endsection