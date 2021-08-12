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
    </style>
</head>

<body class="size-1140">
    <!-- TOP NAV WITH LOGO -->
    <header>
        <div id="topbar">
            <div class="line">
                <div class="s-12 m-6 l-6">
                    <p>CONTACT US: <strong>0800 200 200</strong> | <strong>lebakjayautara@gmail.com</strong></p>
                </div>
                <div class="s-12 m-6 l-6">
                    <div class="social right">
                        <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-instagram_circle"></i></a> | <a href="{{ url('/login') }}"><i class="icon-signin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="line">
                <div class="s-12 l-1">
                    <p class="logo"><a style="color: white;" href="/"><strong>lebakjaya</strong><i>5Utara</i></a></p>
                </div>
                <div class="top-nav s-12 l-10">
                    <p class="nav-text"></p>
                    <ul class="right">
                        <li class="active-item"><a href="#carousel">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <!-- <li><a href="#features">Features</a></li> -->
                        <li><a href="#services">Transparansi Keuangan</a></li>
                        <li><a href="#latest-news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
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
                <!-- <p>All images is purchased from Bigstock. Do not use the images in your website.</p> -->
            </div>
            <div class="s-12 l-6">
                <a class="right" href="#" title="Responsee - lightweight responsive framework">Design and coding<br> by Workplaceme</a>
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