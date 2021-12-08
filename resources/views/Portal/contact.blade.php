@extends('layouts.app')
@section('section')
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(../images/frn.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Get In Touch</h1>
                        <h2>Garasi 81 | Garage 81 | Kopi Portal </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="fh5co-contact" class="fh5co-section animate-box">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Don't be shy, let's chat.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
                <p><a href="mailto:info@yourdomainname.com" class="btn btn-primary btn-outline">Contact Us</a></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
                <form action="#" id="form-wrap">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Your Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Your Message</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
@endsection