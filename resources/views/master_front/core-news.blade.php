<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/components.css">
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/responsee.css">
    <link rel="stylesheet" href="{{URL::asset('front')}}/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{URL::asset('front')}}/owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{URL::asset('front')}}/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('front')}}/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('front')}}/js/modernizr.js"></script>
    <script type="text/javascript" src="{{URL::asset('front')}}/js/responsee.js"></script>
    <script type="text/javascript" src="{{URL::asset('front')}}/js/template-scripts.js"></script>

    <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
    <style>
        .inlineList {
            display: flex;
            flex-direction: row;
            /* Below sets up your display method, ex: flex-start|flex-end|space-between|space-around */
            justify-content: flex-start;
            /* Below removes bullets and cleans white-space */
            list-style: none;
            padding: 0;
            /* Bonus: forces no word-wrap */
            white-space: nowrap;
        }

    </style>
</head>

<body class="size-1140">
    <!-- TOP NAV WITH LOGO -->
    <header>
        <div id="topbar">
            <div class="line">
                <div class="s-12 m-6 l-6">
                    <p>CONTACT US: <strong>Email</strong> : <strong><a style="color: #444" href="mailto:lebakjayau@gmail.com">lebakjayau@gmail.com</strong></p></a>
                </div>
                <div class="s-12 m-6 l-6">
                    <div class="social right">
                        <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-instagram_circle"></i></a> | <a href="{{ url('/login') }}" target="_blank"><i class="icon-signin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="line">
                <div class="s-12 l-1">
                    <p class="logo"><a style="color: white;" href="/"><strong>lebakjaya</strong><i>5AUtara</i></a></p>
                </div>
                <div class="top-nav s-12 l-10">
                    <p class="nav-text"></p>
                    <ul class="right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/#about-us">About Us</a></li>
                        <li><a href="/#services">Transparansi Keuangan</a></li>
                        <li><a href="/#latest-news">News</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('container')

    <!-- FOOTER -->
    <footer>
        <div class="line">
            <div class="s-12 l-6">
                <!-- <p>Copyright 2015, Vision Design - graphic zoo</p> -->
                <?php
                $tgl = date('Y');
                echo "<p>Copyright " . $tgl . " Workplaceme Design - graphic</p>";
                ?>
                <p style="color: #6c7c84">Supported by :</p>
                
                <div class="line">
                    <div class="s-12 m-6 l-6">
                        <div style="margin-top: 10px">
                            <ul class="inlineList">
                                <li style="margin-right: 10px;"><img  src="{{URL::asset('front')}}/img/logo-2.png" alt="..."
                                        class="img-responsive"></li>
                                <li style="margin-right: 10px;"><img  src="{{URL::asset('front')}}/img/kkn-um.png"
                                        alt="..." class="img-responsive"></li>
                                <li style="margin-right: 10px;"><img  src="{{URL::asset('front')}}/img/kkn-tambaksari.png"
                                        alt="..." class="img-responsive"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-12 l-6">
                <a class="right" href="#" title="Responsee - lightweight responsive framework">Design and coding<br> by
                    Workplaceme</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{URL::asset('front')}}/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
                // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007", "&#xf006"],
                pagination: false,
                singleItem: true
            });

            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })
        });
    </script>
</body>

</html>