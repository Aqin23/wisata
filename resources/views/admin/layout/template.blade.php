<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('adminn/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminn/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('adminn/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminn/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('adminn/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminn/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('adminn/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('adminn/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin/layout.navbar')
            @include('admin/layout.sidebar')
            <div class="main-content">
                <section class="section">
                    @yield('main')
                </section>
            </div>
            @include('admin/layout.footer')

        </div>
    </div>
</body>
<!-- General JS Scripts -->
<script src="{{asset('adminn/modules/jquery.min.js')}}"></script>
<script src="{{asset('adminn/modules/popper.js')}}"></script>
<script src="{{asset('adminn/modules/tooltip.js')}}"></script>
<script src="{{asset('adminn/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('adminn/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('adminn/modules/moment.min.js')}}"></script>
<script src="{{asset('adminn/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('adminn/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('adminn/modules/chart.min.js')}}"></script>
<script src="{{asset('adminn/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('adminn/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('adminn/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('adminn/js/page/index.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('adminn/js/scripts.js')}}"></script>
<script src="{{asset('adminn/js/custom.js')}}"></script>
</body>

</html>