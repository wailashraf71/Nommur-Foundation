@extends('layouts.web')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>About</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">About</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

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


@endsection
