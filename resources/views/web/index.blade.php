@extends('layouts.web')

@section('content')

    <!-- slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active dot-style">
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".2s">Nommur</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Formal organization <br> for donation and
                                    charity </P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="{{route('donate')}}" class="hero-btn mb-10" data-animation="fadeInUp"
                                       data-delay=".8s">Donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height slider-bg2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".2s">Foundation</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy life<br> we
                                    need to protect </P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="{{route('donate')}}" class="hero-btn mb-10" data-animation="fadeInUp"
                                       data-delay=".8s">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height slider-bg3 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".2s">Donation</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy<br> life we
                                    need to protect </P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="{{route('donate')}}" class="hero-btn mb-10" data-animation="fadeInUp"
                                       data-delay=".8s">Donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider Area End-->
    <!--? Visit Our Tailor Start -->
    <div class="visit-tailor-area fix">
        <!--Right Contents  -->
        <div class="tailor-offers"></div>
        <!-- left Contents -->
        <div class="tailor-details">
            <span>Our Mission</span>
            <h2>Our main goal is to protect animals</h2>
            <p>The automated process starts as soon as
                your clothes go into the machine. Duis cursus, mi quis
                viverra ornare, eros dolor interdum nulla, ut commodo
                diam libero vitae erat. Aenean faucibus nibh et justo
                cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                risus tristique posuere.</p>
            <p class="pera-bottom">Interdum nulla, ut commodo diam libero vitae erat.
                Aenean faucibus nibh et justo cursus id rutrum lorem
                imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            <div class="footer-tittles">
                <p>CEO, Consulto</p>
                <h2>Capcilena Hanry</h2>
            </div>
        </div>
    </div>
    <!-- Visit Our Tailor End -->
    <!--? Services Area Start -->
    <div class="service-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="https://images.pexels.com/photos/1423413/pexels-photo-1423413.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{route('donate')}}">Orphan kids</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11 ">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="https://images.pexels.com/photos/2385657/pexels-photo-2385657.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{route('donate')}}">Homeless children</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="https://images.pexels.com/photos/5870638/pexels-photo-5870638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{route('donate')}}">Disabled grannies</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Area Start -->
    <section class="support-company-area fix pt-10">
        <div class="support-wrapper align-items-center">
            <div class="left-content">
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-30">
                    <span>Why You Should join us</span>
                    <h2>A lot of animals need protection</h2>
                </div>
                <div class="support-caption">
                    <p class="pera-top">Interdum nulla, ut commodo diam libero vitae erat.
                        Aenean faucibus nibh et justo cursus id rutrum lorem
                        imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    <a href="{{route('donate')}}" class="border-btn">Donate Now</a>
                </div>
            </div>
            <div class="right-content">
                <!-- img -->
                <div class="right-img">
                    <img src="https://images.pexels.com/photos/3933227/pexels-photo-3933227.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=1500" alt="">
                </div>
                <div class="support-img-cap text-center d-flex">
                    <div class="single-one">
                        <span>950</span>
                        <p>Poaching cases</p>
                    </div>
                    <div class="single-two">
                        <span>230</span>
                        <p>Volunteers worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pb-padding section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="section-tittle text-center mb-90">
                        <h2>Latest news</h2>
                        <p>Interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id
                            rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                            </div>
                            <div class="blog-cap">
                                <h3><a href="{{route('donate')}}">Leverage agile frameworks to provide a robust
                                        synopsis</a></h3>
                                <p>The automated process starts as soon as your clothes go into the machine. Duis
                                    cursus, mi quis viverra ornare.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src=https://images.pexels.com/photos/1098769/pexels-photo-1098769.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                            </div>
                            <div class="blog-cap">
                                <h3><a href="{{route('donate')}}">Leverage agile frameworks to provide a robust
                                        synopsis</a></h3>
                                <p>The automated process starts as soon as your clothes go into the machine. Duis
                                    cursus, mi quis viverra ornare.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

@endsection
