@extends('master_front.core-news')
@section('title','News')
@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<section>
    <!-- FIRST BLOCK -->
    <div id="first-block">
        <div class="line">
            <h1>News</h1>
            <p>Kampung Lebak Jaya 5 Utara Merupakan Kampung yang bersinergitas tinggi dan penerapan dalam <br>sebuah kemajuan bersama dalam warga dan untuk Indonesia.</p>
            <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
        </div>
    </div>
    
    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="container">
            <h2 class="section-title">Latest News</h2>
<iframe style="height: 50rem" src="{{'https://drive.google.com/file/d/1w462CwLgm3QOb4z89h4jTYWH-CUG41_m/preview'}}" frameBorder="1" scrolling="auto" height="100%" width="100%" ></iframe>
{{-- https://drive.google.com/file/d/1w462CwLgm3QOb4z89h4jTYWH-CUG41_m/preview             --}}
{{-- <div class="card" style="width: 18rem;">
                <img src="https://noorenergi.co.id/assets_foto_post/1620772565.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://noorenergi.co.id/assets_foto_post/1620772565.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}

        </div>
    </div>
    <!-- CONTACT -->
    <div id="contact">
        <div class="line">
            <h2 class="section-title">Contact Us</h2>
            <div class="margin">
                <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="{{URL::asset('front')}}/img/contact.jpg" alt="">
                </div>
                <div class="s-12 m-12 l-4 margin-bottom right-align">
                    <h3>LEBAK JAYA 5 UTARA</h3>
                    <address>
                        <p><strong>Kecamatan:</strong> Gading</p>
                        <p><strong>Kelurahan:</strong> Tambaksari</p>
                        <p><strong>Kode Pos:</strong> 60134</p>
                        <p><strong>E-mail:</strong> info@lebakjayautara@gmail.com</p>
                    </address>
                    <br />
                    <h3>Social</h3>
                    <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">lebakjaya5utara</a></p>
                    <p><i class="icon-twitter icon"></i> <a href="https://www.facebook.com/myresponsee">lebakjaya5utara</a></p>
                    <p class="margin-bottom"><i class="icon-instagram icon"></i> <a href="https://twitter.com/MyResponsee">lebakjaya5utara</a></p>
                </div>
                <div class="s-12 m-12 l-5">
                    <h3>Contact form</h3>
                    <form class="customform" action="">
                        <div class="s-12"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                        <div class="s-12"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                        <div class="s-12"><textarea placeholder="Your massage" name="" rows="5"></textarea></div>
                        <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit Button</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MAP -->
    <div id="map-block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501.9467704404049!2d112.77962124106715!3d-7.240383641009546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b97c464fd9%3A0xc5d41ec213db5e71!2sJl.%20Lb.%20Jaya%20V%20Utara%2C%20Gading%2C%20Kec.%20Tambaksari%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060134!5e0!3m2!1sen!2sid!4v1627942000916!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0"></iframe>
    </div>
</section>
@endsection
