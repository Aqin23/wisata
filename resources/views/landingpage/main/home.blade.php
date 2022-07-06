@extends('landingpage.index')
@section('main')
    <header class="top-area">
        <div class="header-area" style="background: #333">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href=" {{ route('homePage') }} ">
                                Jember<span>Travel</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="smooth-menu"><a href="#home">Home</a></li>
                                    <li class="smooth-menu"><a href="#pack">Katalog</a></li>
                                    <li class="smooth-menu"><a href="#gallery">Gallery</a></li>
                                    @guest
                                        <li><a href="{{ route('login') }}">login</a></li>
                                    @else
                                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                    <!--/.project-btn-->
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header><!-- /.top-area-->

    <!--about-us start -->
    <section id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>
                                    Explore the Beauty of the Beautiful World

                                </h2>
                                <div class="about-btn">
                                    <button class="about-view">
                                        explore now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.about-us-txt-->
                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-0">
                        <div class="single-about-us">

                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.about-us-->
    <!--about-us end -->

    <!--travel-box start-->


    <!--service start-->
    <section id="service" class="service">
        <div class="container">

            <div class="service-counter text-center">

                <div class="col-md-4 col-sm-4">
                    <div class="single-service-box">
                        <div class="service-img">
                            <img src="{{ asset('landingpages/images/service/s1.png') }}" alt="service-icon" />
                        </div>
                        <!--/.service-img-->
                        <div class="service-content">
                            <h2>
                                <a href="#">
                                    Choose amazing tour packages
                                </a>
                            </h2>
                            <p>Must use our tour Planner for breathtaking tour packages!</p>
                        </div>
                        <!--/.service-content-->
                    </div>
                    <!--/.single-service-box-->
                </div>
                <!--/.col-->

                <div class="col-md-4 col-sm-4">
                    <div class="single-service-box">
                        <div class="service-img">
                            <img src="{{ asset('landingpages/images/service/s2.png') }}" alt="service-icon" />
                        </div>
                        <!--/.service-img-->
                        <div class="service-content">
                            <h2>
                                <a href="#">
                                    book top class hotel
                                </a>
                            </h2>
                            <p>This amazing site helps you book the best hotels all around the world!</p>
                        </div>
                        <!--/.service-content-->
                    </div>
                    <!--/.single-service-box-->
                </div>
                <!--/.col-->

                <div class="col-md-4 col-sm-4">
                    <div class="single-service-box">
                        <div class="statistics-img">
                            <img src="{{ asset('landingpages/images/service/s3.png') }}" alt="service-icon" />
                        </div>
                        <!--/.service-img-->
                        <div class="service-content">

                            <h2>
                                <a href="#">
                                    online flight booking
                                </a>
                            </h2>
                            <p>Book your flight instantly using TourNest!</p>
                        </div>
                        <!--/.service-content-->
                    </div>
                    <!--/.single-service-box-->
                </div>
                <!--/.col-->

            </div>
            <!--/.statistics-counter-->
        </div>
        <!--/.container-->

    </section>
    <!--/.service-->
    <!--service end-->

    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    Katalog
                </h2>
                <p>
                    Katalog berbagai wisata di Jawa timur
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">
                    @foreach ($PaketWisata as $p)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ asset('storage/' . $p->foto) }}" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>{{ $p->nama_wisata }}</h3>
                                    <div class="packages-para">
                                        Paket Wisata {{ $p->nama_wisata }}
                                    </div>
                                    <!--/.packages-para-->

                                    <!--/.packages-review-->
                                    <div class="about-btn">
                                        <a href="{{ route('detailList', $p->id) }}" class="about-view packages-btn">
                                            Detail
                                        </a>
                                    </div>
                                    <!--/.about-btn-->
                                </div>
                                <!--/.single-package-item-txt-->
                            </div>
                            <!--/.single-package-item-->

                        </div>
                    @endforeach
                    <!--/.col-->

                    <!--/.about-btn-->
                </div>
                <!--/.single-package-item-txt-->
            </div>
            <!--/.single-package-item-->

        </div>
        <!--/.col-->


        <!--/.col-->


        <!--/.col-->

        </div>
        <!--/.row-->
        </div>
        <!--/.packages-content-->
        </div>
        <!--/.container-->

    </section>


    <!--discount-offer start-->
    <section class="discount-offer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="dicount-offer-content text-center">
                        <h2>Join with us within 7 March, 2019 and get upto 40% Discount</h2>
                        <div class="campaign-timer">
                            <div id="timer">
                                <div class="time time-after" id="days">
                                    <span></span>
                                </div>
                                <!--/.time-->
                                <div class="time time-after" id="hours">

                                </div>
                                <!--/.time-->
                                <div class="time time-after" id="minutes">

                                </div>
                                <!--/.time-->
                                <div class="time" id="seconds">

                                </div>
                                <!--/.time-->
                            </div>
                            <!--/.timer-->
                        </div>
                        <!--/.campaign-timer-->
                        <div class="about-btn">
                            <button class="about-view discount-offer-btn">
                                join now
                            </button>
                        </div>
                        <!--/.about-btn-->


                    </div><!-- /.dicount-offer-content-->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->

    </section><!-- /.discount-offer-->
    <!--discount-offer end-->

    <!--packages start-->

    <!--/.packages-->
    <!--packages end-->
    <!--galley start-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="gallery-details">
                <div class="gallary-header text-center">
                    <h2>
                        Galeri
                    </h2>
                    <p>
                        Galeri Wisata Jember
                    </p>
                </div>
                <!--/.gallery-header-->
                <div class="gallery-box">
                    <div class="gallery-content">
                        <div class="filtr-container">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="filtr-item">
                                        <img src="{{ asset('landingpages/images/gallary/g1.jpg') }}"
                                            alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                china
                                            </a>
                                            <p><span>20 tours</span><span>15 places</span></p>
                                        </div><!-- /.item-title -->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-6">
                                    <div class="filtr-item">
                                        <img src="{{ asset('landingpages/images/gallary/g2.jpg') }}"
                                            alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                venuzuala
                                            </a>
                                            <p><span>12 tours</span><span>9 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="{{ asset('landingpages/images/gallary/g3.jpg') }}"
                                            alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                brazil
                                            </a>
                                            <p><span>25 tours</span><span>10 places</span></p>
                                        </div><!-- /.item-title -->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="{{ asset('landingpages/images/gallary/g4.jpg') }}"
                                            alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                australia
                                            </a>
                                            <p><span>18 tours</span><span>9 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="{{ asset('landingpages/images/gallary/g5.jpg') }}"
                                            alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                netharlands
                                            </a>
                                            <p><span>14 tours</span><span>12 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-8">
                                    <div class="filtr-item">
                                        <img src="{{ asset('landingpages/images/gallary/g6.jpg') }}"
                                            alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                turkey
                                            </a>
                                            <p><span>14 tours</span><span>6 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                            </div><!-- /.row -->

                        </div><!-- /.filtr-container-->
                    </div><!-- /.gallery-content -->
                </div>
                <!--/.galley-box-->
            </div>
            <!--/.gallery-details-->
        </div>
        <!--/.container-->

    </section>
    <!--/.gallery-->
    <!--gallery end-->
    <!-- testemonial Start -->
    <section class="testemonial">
        <div class="container">

            <div class="gallary-header text-center">
                <h2>
                    clients reviews
                </h2>
                <p>
                    Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
                </p>

            </div>
            <!--/.gallery-header-->

            <div class="owl-carousel owl-theme" id="testemonial-carousel">

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial1.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial2.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial1.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial1.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial2.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial1.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial1.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial2.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="{{ asset('landingpages/images/client/testimonial1.jpg') }}" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

            </div>
            <!--/.testemonial-carousel-->
        </div>
        <!--/.container-->

    </section>
    <!--/.testimonial-->
    <!-- testemonial End -->


    <!--special-offer start-->

    <!--/.special-offer end-->
    <!--special-offer end-->

    <!--blog start-->

    <!--/.blog-->
    <!--blog end-->


    <!--subscribe start-->
    <section id="subs" class="subscribe">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    Join our Subscribers List to Get Regular Update
                </h2>
                <p>
                    Subscribe Now. We will send you Best offer for your Trip
                </p>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="custom-input-group">
                            <input type="email" class="form-control" placeholder="Enter your Email Here">
                            <button class="appsLand-btn subscribe-btn">Subscribe</button>
                            <div class="clearfix"></div>
                            <i class="fa fa-envelope"></i>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </section>
@endsection
