@extends('layouts.app')
@section('section')

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!--Owl Carousel-->
<script src="https://github.com/OwlCarousel2/OwlCarousel2.git"> </script>
<link rel="stylesheet" href="portal/css/owl.carousel.min.css">
<link rel="stylesheet" href="portal/css/owl.theme.default.min.css">
<link rel="stylesheet" href="portal/css/owl.theme.default.css">

</head>

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/frn.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Portal Manajemen</h1>
                        <h2>Garage 81 | Garasi 81 | Kopi Portal </a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
        <div class="container">
            <div class="judulproduk"> 
                <div class="section-heading">
                <h2> Produk Kami </h2>
                </div>
            <section class="produk">
                <div class="produk">
                    <div class="icon">
                        <a href="{{ route('cafecmh') }}">
                            <img src="/images/garagelogo.jpg">
                    </div>
                    <h2>Garage 81 Cimahi</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic fuga tempore cum dignissimos
                        dicta!
                    </p>
                    </a>
                </div>
                <div class="produk">
                    <div class="icon">
                        <a href="{{ route('cafe81') }}">
                            <img src="/images/garasi81logo.png">
                    </div>
                    <h2>Garasi 81 Bandung</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic fuga tempore cum dignissimos
                        dicta!
                    </p>
                    </a>
                </div>
                <div class="produk">
                    <div class="icon">
                        <a href="{{ route('kopiprt') }}">
                            <img src="/images/kopiprtlogo.jpg">
                    </div>
                    <h2>Kopi Portal</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic fuga tempore cum dignissimos
                        dicta!
                    </p>
                    </a>
                </div>
            </section>
        </div>
        </div>
<!--Visi Misi Portal-->
    <div id="fh5co-about" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
                <div class="section-heading">
                <h2>Latar Belakang</h2>
                <p>Portal Manajemen adalah perusahaan yang bergerak di bidang kuliner khususnya di bisnis Kopi. Yang mempunyai beberapa 
                    cabang maupun franchise yang berlokasi di beberapa titik Kota Bandung, Portal Manajemen menaungi beberapa cafe yang diantaranya 
                    seperti Garagae 81, Garasi 81 dan Kopi Portal. 

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, exercitationem. Corrupti provident quo maxime a doloribus quia modi eius vel fugiat. Ex distinctio facilis incidunt voluptate eaque ducimus omnis saepe.</p>
                </p>
            </div>
            </div>
    <div class="col-md-5 col-md-push-2 animate-box">
    <div class="section-heading">
        <h2>Visi & Misi</h2>
        <h3>Visi</h3>
        <p>Memanage Cafe dan Franchise yang dinaungi Portal Manajemen agar kedepannya bisa lebih maju dan bersaing dengan yang lainnya.</p>
        <h3>Misi</h3>
        <p>* Terus berinovasi dari setiap waktunya untuk terus berkembang</p>
        <p>* Membuat promosi yang lebih unik dari sebelumnya</p>
        <p>* Membuat karyawan yang harmonis di dalam pekerjaan</p>
    </div>
    </div>
        </div>
            </div>
                </div>
<!--Visi Misi Portal-->

<!-- Image Slider Portal-->
        <div class="owl-carousel animate-box slide slides owl-lazy animate-box align-content-center">
            @foreach ($galeri as $g)
            <a href="{{ asset('upload/' . $g->foto_galeri) }}" class="fancybox" class="img-rounded"
                data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px"> 
                <img src="{{ asset('upload/' . $g->foto_galeri) }}" class="img-fluid mb-2"
                alt="white sample" width="200px" height="200px" />
            </a>
        @endforeach
        </div>
            </div>
<!-- Image Slider Portal-->

        <!--Acara Garage 81-->
        <div id="fh5co-blog" class="fh5co-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Events</h2>
                        <p>Lorem ipsum dolor sit amet, couatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe,
                            culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus,
                            blanditiis facilis quidem dolore! Dolorem, molestiae.</p>
                    </div>
                </div>
                @foreach ($event as $evn)
                <div class="row">
                    <div class="col-md-4 col-md-push-0">
                        <div class="fh5co-blog animate-box">
                            <a href="{{ asset('upload/' . $evn->foto_event) }}" class="fancybox blog-bg"
                                data-fancybox="ggblg" data-gallery="event" height="50px" width="50px">
                                <img src="{{ asset('upload/' . $evn->foto_event) }}" class="img-fluid mb-1 blog"
                                alt="white sample" width="359.98px" height="300px"/>
                            </a>
                            <div class="blog-text">
                                <span class="posted_on">{{ $evn->tgl_event }}</span>
                                <h3><a href="{{ route('kopiprt') }}">{{ $evn->nama }}</a></h3>
                                <p>{!! $evn->rinciankegiatan !!}</p>
                                <ul class="stuff">
                                    <li><a href="{{ route('cafe81') }}"><i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
                 @foreach ($eventcmh as $evn)
                <div class="row">
                    <div class="col-md-4 col-md-push-0">
                        <div class="fh5co-blog animate-box">
                            <a href="{{ asset('upload/' . $evn->foto_event) }}" class="fancybox blog-bg"
                                data-fancybox="ggblg" data-gallery="event" height="50px" width="50px">
                                <img src="{{ asset('upload/' . $evn->foto_event) }}" class="img-fluid mb-1 blog"
                                alt="white sample" width="359.98px" height="300px"/>
                            </a>
                            <div class="blog-text">
                                <span class="posted_on">{{ $evn->tgl_event }}</span>
                                <h3><a href="{{ route('kopiprt') }}">{{ $evn->nama }}</a></h3>
                                <p>{!! $evn->rinciankegiatan !!}</p>
                                <ul class="stuff">
                                    <li><a href="{{ route('cafe81') }}"><i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
                 @foreach ($eventkopi as $evn)
                <div class="row">
                    <div class="col-md-4 col-md-push-0">
                        <div class="fh5co-blog animate-box">
                            <a href="{{ asset('upload/' . $evn->foto_event) }}" class="fancybox blog-bg"
                                data-fancybox="ggblg" data-gallery="event" height="50px" width="50px">
                                <img src="{{ asset('upload/' . $evn->foto_event) }}" class="img-fluid mb-1 blog"
                                alt="white sample" width="359.98px" height="300px"/>
                            </a>
                            <div class="blog-text">
                                <span class="posted_on">{{ $evn->tgl_event }}</span>
                                <h3><a href="{{ route('kopiprt') }}">{{ $evn->nama }}</a></h3>
                                <p>{!! $evn->rinciankegiatan !!}</p>
                                <ul class="stuff">
                                    <li><a href="{{ route('cafe81') }}"><i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
        <!--Acara Garage 81-->


<!--script-link----------->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="portal/js/owl.carousel.min.js"></script>
<script src="portal/js/scriptslider.js"></script>
<script src="portal/js/autoplay.js"></script>
@endsection
