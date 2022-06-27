<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('adminn/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('adminn/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('adminn/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/css/components.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminn/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('adminn/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- sweetalert -->
    <script src="{{ asset('adminn/plugins/sweetalert/sweetalert.js') }}"></script>

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
<script src="{{ asset('adminn/modules/jquery.min.js') }}"></script>
<script src="{{ asset('adminn/modules/popper.js') }}"></script>
<script src="{{ asset('adminn/modules/tooltip.js') }}"></script>
<script src="{{ asset('adminn/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminn/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('adminn/modules/moment.min.js') }}"></script>
<script src="{{ asset('adminn/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('adminn/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminn/modules/chart.min.js') }}"></script>
<script src="{{ asset('adminn/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('adminn/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('adminn/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('adminn/js/page/index.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('adminn/js/scripts.js') }}"></script>
<script src="{{ asset('adminn/js/custom.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('adminn/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminn/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
    $(function() {
        $("#datatable1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datatable1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

                        @if ($errors->any())
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: '@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach',
                                })
                            </script>
                            @elseif ($message = Session::get('success'))
                            <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    html: '{{ $message }}',
                                })
                            </script>
                            @elseif ($message = Session::get('warning'))
                            <script>
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Warning!',
                                    html: '{{ $message }}',
                                })
                            </script>
                            @endif

</body>

</html>
