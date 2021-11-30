@extends('layouts.app')
@section('section')
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Portal Management </h1>
                        <div class="h2tagline">
                        <h2>" We Are The Best "</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider">
    <div class="slides">
<!--radio button start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <input type="radio" name="radio-btn" id="radio6">
<!--radio button end-->
<!--slide image mulai-->
            <div class="slide first">
                <img src="/images/prt.png" alt="">
                    <div class="container">
            <div class="slide">
                <img src="/images/nkg.png" alt="">
                <img src="/images/prt.png" alt="">
                <img src="/images/frn.png" alt="">
                <img src="/images/cmh.png" alt="">
                <img src="/images/prt.png" alt="">
                    </div>
                </div>
            </div>
<!--slide image end-->
<!--otomatis navigasi mulai-->
        <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
        <div class="auto-btn5"></div>
        <div class="auto-btn6"></div>
            </div>
<!--otomatis navigasi end-->
</div>
<!--manual navigasi mulai-->
<div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
    <label for="radio5" class="manual-btn"></label>
    <label for="radio6" class="manual-btn"></label>

</div>
<!--manual navigasi end-->
</div>
    </div>
</div>
</div>
<!-- image slider berakhir-->

<script type="text/javascript">
var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 6){
        counter = 1;
    }
}, 5000);
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




@endsection