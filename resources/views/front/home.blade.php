@extends('master_front.core')
@section('title','Lebak Jaya 5 Utara')
@section('container')
<section>
    <!-- CAROUSEL -->
    <div id="carousel">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{URL::asset('front')}}/img/FULL.png" alt="">
                <div class="line">
                    <div class="text hide-s">
                        <div class="line">
                            <div class="prev-arrow hide-s hide-m">
                                <i class="icon-chevron_left"></i>
                            </div>
                            <div class="next-arrow hide-s hide-m">
                                <i class="icon-chevron_right"></i>
                            </div>
                        </div>
                        <h2>Free Onepage Responsive Template</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('front')}}/img/second.jpg" alt="">
                <div class="line">
                    <div class="text hide-s">
                        <div class="line">
                            <div class="prev-arrow hide-s hide-m">
                                <i class="icon-chevron_left"></i>
                            </div>
                            <div class="next-arrow hide-s hide-m">
                                <i class="icon-chevron_right"></i>
                            </div>
                        </div>
                        <h2>Fully Responsive Components</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('front')}}/img/third.jpg" alt="">
                <div class="line">
                    <div class="text hide-s">
                        <div class="line">
                            <div class="prev-arrow hide-s hide-m">
                                <i class="icon-chevron_left"></i>
                            </div>
                            <div class="next-arrow hide-s hide-m">
                                <i class="icon-chevron_right"></i>
                            </div>
                        </div>
                        <h2>Build new Layout in 10 minutes!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIRST BLOCK -->
    <div id="first-block">
        <div class="line">
            <h1>Kampung Lebak Jaya 5 Utara</h1>
            <p>Merupakan Kampung yang bersinergitas tinggi dan penerapan dalam sebuah kemajuan bersama dalam warga dan untuk Indonesia.</p>
            <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
        </div>
    </div>
    <!-- FEATURES -->
    <div id="features">
        <div class="line">
            <div class="margin">
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-tablet icon3x"></i>
                    <h2>Fully responsive</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-isight icon3x"></i>
                    <h2>Clean design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing.</p>
                </div>
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-star icon3x"></i>
                    <h2>Valid code</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna erat volutpat.</p>
                </div>
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-heart icon3x"></i>
                    <h2>Totally free</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nonummy.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US -->
    <div id="about-us">
        <div class="s-12 m-12 l-8 media-container">
            <img src="{{URL::asset('front')}}/img/FULL.png" alt="">
        </div>
        <article class="s-12 m-12 l-4">
            <h2>About Us<br> Lebak Jaya 5 Utara<br> 5A/5B/5C</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis nisl ut aliquip ex ea commodo consequat.
            </p>
            <div class="about-us-icons">
                <i class="icon-paperplane_ico"></i> <i class="icon-trophy"></i> <i class="icon-clock"></i>
            </div>
        </article>
    </div>
    <!-- SERVICES -->
    <div id="services">
        <div class="line">
            <h2 class="section-title">Transparansi Keuangan</h2>
            <div class="margin">
                <div class="s-12 m-6 l-4 margin-bottom">
                    <i class="icon-vector"></i>
                    <div class="service-text">
                        <h3>Khas Kampung</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div class="s-12 m-6 l-4 margin-bottom">
                    <i class="icon-eye"></i>
                    <div class="service-text">
                        <h3>Pendapatan Perbulan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div class="s-12 m-12 l-4 margin-bottom">
                    <i class="icon-random"></i>
                    <div class="service-text">
                        <h3>Pengeluaran Perbulan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="margin">
                <div class="s-12 m-12 l-2 center transke">
                    <a href="mediafire.com">
                        <i style="width: 200px;" class="icon-download">
                            <d style="font-family: Open Sans,Arial,sans-serif;">Download</d>
                        </i>
                    </a>
                    <div class="service-text">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="line">
            <h2 class="section-title">Latest News</h2>
            <div class="margin">

                <div class="s-12 m-12 l-6">
                    <div class="s-12 l-2">
                        <div class="news-date">
                            <p class="day">28</p>
                            <p class="month">AUGUST</p>
                            <p class="year">2015</p>
                        </div>
                    </div>
                    <div class="s-12 l-10">
                        <div class="news-text">
                            <h4>First latest News</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>

                <div class="s-12 m-6 l-6">
                    <div class="s-12 l-2">
                        <div class="news-date">
                            <p class="day">28</p>
                            <p class="month">AUGUST</p>
                            <p class="year">2015</p>
                        </div>
                    </div>
                    <div class="s-12 l-10">
                        <div class="news-text">
                            <h4>First latest News</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>

                <div class="s-12 m-6 l-12">
                    <br>
                    <a style="position: relative;" href="news-front">More News ...</a>
                </div>
            </div>
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