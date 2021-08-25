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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <style>
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 54px;
            height: 54px;
            z-index: 9999;
            cursor: pointer;
            text-decoration: none;
            transition: opacity 0.2s ease-out;
            opacity: 0.5;
            background-image: url(top.png);
        }

        .back-to-top:hover {
            opacity: 0.7;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            //Check to see if the window is top if not then display button
            $(window).scroll(function () {

                // Show button after 100px
                var showAfter = 100;
                if ($(this).scrollTop() > showAfter) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            //Click event to scroll to top
            $('.back-to-top').click(function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

        });

    </script>
</head>

<body class="size-1140">
    <!-- TOP NAV WITH LOGO -->
    <header>
        <div id="topbar">
            <div class="line">
                <div class="s-12 m-6 l-6">
                    <p>CONTACT <strong>EMAIL US</strong> : <strong><a style="color: #444"
                                href="mailto:lebakjayau@gmail.com">lebakjayau@gmail.com</a></strong></p>
                </div>
                <div class="s-12 m-6 l-6">
                    <div class="social right">
                        <a href="https://api.whatsapp.com/send/?phone=62881026187475" target="_blank"><i
                                class="fab fa-whatsapp"></i></a>
                        <a href="https://youtube.com/channel/UCL-9Y5CYeiMmB5dvjzr7RpQ" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://instagram.com/kkn_tambaksari_4?utm_medium=copy_link" target="_blank"><i
                                class="fab fa-instagram"></i></a> |
                        <a href="login" target="_blank"><i class="icon-signin"></i></a>
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
                <p style="color: #6c7c84">Supported by :</p>

                <div class="line">
                    <div class="s-12 m-6 l-6">
                        <div style="margin-top: 10px">
                            <ul class="inlineList">
                                <li style="margin-right: 10px;"><img src="{{URL::asset('front')}}/img/logo-2.png"
                                        alt="..." class="img-responsive"></li>
                                <li style="margin-right: 10px;"><img src="{{URL::asset('front')}}/img/kkn-um.png"
                                        alt="..." class="img-responsive"></li>
                                <li style="margin-right: 10px;"><img
                                        src="{{URL::asset('front')}}/img/kkn-tambaksari.png" alt="..."
                                        class="img-responsive"></li>
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
        <a href="#" class="back-to-top"></a>
    </footer>
    <script type="text/javascript" src="{{URL::asset('front')}}/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
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
            $(".next-arrow").click(function () {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function () {
                theme_slider.trigger('owl.prev');
            })
        });

    </script>
</body>

</html>
