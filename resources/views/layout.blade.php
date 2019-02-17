<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Zillur Rahman Noyan :: || Full Stack Web Developer and Cyber Specialist...!</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{URL::to("fontend/css/bootstrap.min.css")}}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{URL::to("fontend/css/owl.carousel.css")}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::to("fontend/css/owl.theme.default.css")}}" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{URL::to("fontend/css/magnific-popup.css")}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{URL::to("fontend/css/font-awesome.min.css")}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{URL::to("fontend/css/style.css")}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::to("fontend/css/newstyle.css")}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Header -->
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('{{URL::to("fontend/img/background1.jpg")}}');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="{{url("/")}}">
                            <img class="logo" src="{{URL::to("fontend/img/logo.png")}}" alt="logo">
                            <img class="logo-alt" src="{{URL::to("fontend/img/logo-alt.png")}}" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#pricing">Prices</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="has-dropdown"><a href="#blog">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog-single.html">blog post</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
        <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h2 class="white-text" style="font-style: raleway">About Zillur Rahman</h2>
                            <p class="white-text" style="font-style: raleway">I am an Expert Researcher in Cyber Security, And Web Developer Internet of Things, Cryptocurrencies and blockchain technologies computer science. I love computer networks, Ethical hacking and Security related tech. I have a team to <b>SBIT</b> with on different  projects. Entrusting me with your project is one way to guarantee your success.
                            </p>

                            <?php

                    //<button class="main-btn">Facebook</button>

                    //<button class="main-btn">Twitter</button>

                            ?>
                            <a href="https://facebook.com/noyan.cse" target="_blank"><i class=" main-btn fa fa-facebook"></i></a>
                            <a href="https://twitter.com/ZillurNoyan6" target="_blank"><iclass=" main-btn fa fa-twitter"></i></a>
                            <a href="https://plus.google.com/109333158520786416872" target="_blank"><i class=" main-btn fa fa-google-plus"></i></a>
                            <a href="https://www.instagram.com/zillurrahmannoyan" target="_blank"><i class=" main-btn fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/zillur-rahman-82445b163" target="_blank"><i class=" main-btn fa fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/channel/UC0NSWhGKYeWtq7uCu_fDdpA" target="_blank"><i class=" main-btn fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
    <!-- /Header -->

    <!-- About -->
    <div id="about" class="section md-padding">

        <!-- Extends file -->

        @yield('content')

    </div>
    <!-- /Contact -->


    <!-- Footer -->
    <footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="img/logo-alt.png" alt="logo"></a>
                    </div>
                    <!-- /footer logo -->

                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- /footer follow -->

                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <p>Copyright © 2018. All Rights Reserved. Designed by <a href="https://sbit.com.bd" target="_blank">NOYAN</a></p>
                    </div>
                    <!-- /footer copyright -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>
    <!-- /Footer -->

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->
    

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{URL::to("fontend/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{URL::to("fontend/js/bootstrap.min.js")}}"></script>
    <script type="text/javascript" src="{{URL::to("fontend/js/owl.carousel.min.js")}}"></script>
    <script type="text/javascript" src="{{URL::to("fontend/js/jquery.magnific-popup.js")}}"></script>
    <script type="text/javascript" src="{{URL::to("fontend/js/main.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1500
            });
        });
    </script>


</body>

</html>
