<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->
    <title>JemberTravel</title>

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('landingpages/logo/favicon.png') }}" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/font-awesome.min.css') }}" />

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/animate.css') }}" />

    <!--hover.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/hover-min.css') }}">

    <!--datepicker.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/datepicker.css') }}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpages/css/owl.theme.default.min.css') }}" />

    <!-- range css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/jquery-ui.min.css') }}" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/bootstrap.min.css') }}" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('landingpages/css/bootsnav.css') }}" />

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/style.css') }}" />

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('landingpages/css/responsive.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
   your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">
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
                                    <li class="smooth-menu"><a href="#home">home</a></li>
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
    <!-- main-menu End -->


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
                                        <button class="about-view packages-btn">
                                            Detail
                                        </button>
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
    <!--subscribe end-->

    <!-- footer-copyright start -->
    <footer class="footer-copyright">
        <div class="container">
            <div class="footer-content">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <div class="footer-logo">
                                <a href="index.html">
                                    tour<span>Nest</span>
                                </a>
                                <p>
                                    best travel agency
                                </p>
                            </div>
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>link</h2>
                            <div class="single-footer-txt">
                                <p><a href="#">home</a></p>
                                <p><a href="#">destination</a></p>
                                <p><a href="#">spacial packages</a></p>
                                <p><a href="#">special offers</a></p>
                                <p><a href="#">blog</a></p>
                                <p><a href="#">contacts</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>popular destination</h2>
                            <div class="single-footer-txt">
                                <p><a href="#">china</a></p>
                                <p><a href="#">venezuela</a></p>
                                <p><a href="#">brazil</a></p>
                                <p><a href="#">australia</a></p>
                                <p><a href="#">london</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item text-center">
                            <h2 class="text-left">contacts</h2>
                            <div class="single-footer-txt text-left">
                                <p>+1 (300) 1234 6543</p>
                                <p class="foot-email"><a href="#">info@tnest.com</a></p>
                                <p>North Warnner Park 336/A</p>
                                <p>Newyork, USA</p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->

            </div>
            <!--/.footer-content-->
            <hr>
            <div class="foot-icons ">
                <ul class="footer-social-links list-inline list-unstyled">
                    <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

            </div>
            <!--/.foot-icons-->
            <div id="scroll-Top">
                <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip"
                    data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
            <!--/.scroll-Top-->
        </div><!-- /.container-->

    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->




    <script src="{{ asset('landingpages/js/jquery.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="{{ asset('landingpages/js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('landingpages/js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset('landingpages/js/jquery.filterizr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="{{ asset('landingpages/js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('landingpages/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landingpages/js/waypoints.min.js') }}"></script>

    <!--owl.carousel.js-->
    <script src="{{ asset('landingpages/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('landingpages/js/jquery.sticky.js') }}"></script>

    <!--datepicker.js-->
    <script src="{{ asset('landingpages/js/datepicker.js') }}"></script>

    <!--Custom JS-->
    <script src="{{ asset('landingpages/js/custom.js') }}"></script>


</body>

</html>
