@extends('layouts.web')

@section('content')

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Our cases</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Our cases</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--? Our Cases Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>Every day 6,000 beavers perished</h2>
                        <p class="pl-20 pr-20">Interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh
                            et justo
                            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="https://images.pexels.com/photos/5329060/pexels-photo-5329060.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="{{route('donate')}}">Wildlife in Danger</a></h3>
                            <p>Interdum nulla, ut commodo diam libero vitae
                                erat. Aenean faucibus nibh et justo cursus
                                rutrum.</p>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="70"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices">
                                <p><span>47,589 of 74,574</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="https://images.pexels.com/photos/6083918/pexels-photo-6083918.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="{{route('donate')}}">Our Green Projects</a></h3>
                            <p>Interdum nulla, ut commodo diam libero vitae
                                erat. Aenean faucibus nibh et justo cursus
                                rutrum.</p>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="25"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="prices">
                                <p><span>47,589 of 74,574</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases">
                        <div class="cases-img">
                            <img src="https://images.pexels.com/photos/5889913/pexels-photo-5889913.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="{{route('donate')}}">Wildlife in Danger</a></h3>
                            <p>Interdum nulla, ut commodo diam libero vitae
                                erat. Aenean faucibus nibh et justo cursus
                                rutrum.</p>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="50"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="prices">
                                <p><span>47,589 of 74,574</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases End -->

@endsection
