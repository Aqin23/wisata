<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Nota</title>
</head>

<body>
    <div class="container mt-5 ">
        <div class="row  justify-content-center">
            <div class="col-sm-8">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="row border-top border-bottom ">
                            <div class="col">
                                <h3>Jember Travel</h3>
                                Jln. .... <br>
                                0890989
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td width="40%">: {{ $detail->userFk->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Wisata</td>
                                        <td>: {{ $detail->detailWisataFk->paketFk->nama_wisata }}</td>
                                    </tr>
                                    <tr>
                                        <td>Paket</td>
                                        <td>: {{ $detail->detailWisataFk->nama_paket }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 border-bottom pb-3">
                            <div class="col">
                                <div class="row mt-4">
                                    <div class="col border-top border-bottom p-2">
                                        Terbilang Rp.{{ number_format($detail->total_harga, 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <div class="row">
                                    <div class="col text-center">
                                        Jember, {{ $detail->tgl_awal }} <br>
                                        <img src="{{ asset('css/tanda-tangan.jpg') }}" width="150px">
                                        <br>
                                        Kepala Jember Travel
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
