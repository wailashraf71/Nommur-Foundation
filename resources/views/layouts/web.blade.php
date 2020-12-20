<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Nommur Foundation</title>
    <link href="{{asset('images/favicon.png')}}" rel="icon">
    <link href="{{asset('images/favicon.png')}}" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset("assets/web/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/slicknav.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/progressbar_barfiller.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/gijgo.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/animated-headline.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("assets/web/css/style.css")}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: #fff;
        }
    </style>
    @yield('style')
</head>

<body>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/web/img/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ======= Header ======= -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a class="row" href="{{route('home')}}"><img src="{{asset('assets/web/img/logo.png')}}" class="px-4" style="width: 90px" alt=""><h1 class="align-self-center mt-1" style="font-size: 25px;font-family: 'Varela Round', sans-serif; color: #425140">Nommur Foundation</h1></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{ request()->segment(1) === null ? 'active' : null }}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="{{ request()->segment(1) === 'about' ? 'active' : null }}"><a href="{{route('about')}}">About</a></li>
                                            <li class="{{ request()->segment(1) === 'our-cases' ? 'active' : null }}"><a href="{{route('our-cases')}}">Our cases</a></li>
                                            <li class="{{ request()->segment(1) === 'contact' ? 'active' : null }}"><a href="{{route('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="{{route('donate')}}" class="btn header-btn">Make a Donation</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
@yield('hero')

<main id="main">
    <section class="inner-page">
        <div id="app">
            <!-- header area end -->
            <div class="container main-content-inner">
                @if(session()->has('message'))
                    <div class="alert alert-success mt-5" style="font-size: 16px">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger mt-5" style="font-size: 16px">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
            @yield('content')

        </div>
    </section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="footer-wrapper">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container ">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="{{route('home')}}"><img src="{{asset('assets/web/img/logo.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>The automated process starts as soon as your clothes go into the machine.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Navigations</h4>
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('our-cases')}}">Our Cases</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="{{route('donate')}}">Make A Donation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact us</h4>
                                <ul>
                                    <li><a href="#">info@nommur.com</a></li>
                                    <li><a href="#">Iraq, Mosul</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li class="number"><a href="#">+964 783 367 3904</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JavaScripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- JS here -->
<script src="{{asset("./assets/web/js/vendor/modernizr-3.5.0.min.js")}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset("./assets/web/js/vendor/jquery-1.12.4.min.js")}}"></script>
<script src="{{asset("./assets/web/js/popper.min.js")}}"></script>
<script src="{{asset("./assets/web/js/bootstrap.min.js")}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset("./assets/web/js/jquery.slicknav.min.js")}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset("./assets/web/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("./assets/web/js/slick.min.js")}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset("./assets/web/js/wow.min.js")}}"></script>
<script src="{{asset("./assets/web/js/animated.headline.js")}}"></script>
<script src="{{asset("./assets/web/js/jquery.magnific-popup.js")}}"></script>

<!-- Date Picker -->
<script src="{{asset("./assets/web/js/gijgo.min.js")}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset("./assets/web/js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("./assets/web/js/jquery.sticky.js")}}"></script>
<!-- Progress -->
<script src="{{asset("./assets/web/js/jquery.barfiller.js")}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset("./assets/web/js/jquery.counterup.min.js")}}"></script>
<script src="{{asset("./assets/web/js/waypoints.min.js")}}"></script>
<script src="{{asset("./assets/web/js/jquery.countdown.min.js")}}"></script>
<script src="{{asset("./assets/web/js/hover-direction-snake.min.js")}}"></script>

<!-- contact js -->
<script src="{{asset("./assets/web/js/jquery.form.js")}}"></script>
<script src="{{asset("./assets/web/js/jquery.validate.min.js")}}"></script>
<script src="{{asset("./assets/web/js/mail-script.js")}}"></script>
<script src="{{asset("./assets/web/js/jquery.ajaxchimp.min.js")}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset("./assets/web/js/plugins.js")}}"></script>
<script src="{{asset("./assets/web/js/main.js")}}"></script>

@yield('script')

</body>

</html>
