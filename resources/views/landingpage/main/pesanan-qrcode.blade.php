@extends('landingpage.index')
@include('landingpage.header')
@section('main')
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    QR CODE
                </h2>
                <p>
                    Pembayaran
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="container ">
                    <div class="row ">
                        <div class="col-sm-12 text-center">
                            @php
                                $isi = 'ID: id' . $detail->id . "\n" . 'Nama: ' . $detail->userFk->name . "\n" . 'Wisata: ' . $detail->detailWisataFk->paketFk->nama_wisata . $detail->detailWisataFk->nama_paket . "\n" . 'Total: Rp.' . number_format($detail->total_harga);
                            @endphp
                            <div>
                                {!! QrCode::size(200)->generate($isi) !!}
                            </div>
                            <div style="margin-top: 50px" class="alert alert-primary" role="alert">
                                Silahkan Tunjukkan Barcode kepada Petugas
                            </div>
                            <div>
                                <a href="{{ route('pesanan') }}" class="btn btn-primary">
                                    Kembali
                                </a>
                            </div>

                        </div>
                    </div>
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
@endsection
