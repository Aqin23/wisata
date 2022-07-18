@extends('landingpage.index')
@include('landingpage.header')
@section('main')
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    Pesanan
                </h2>
                <p>
                    Pesanan kamu
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="container ">
                    <div class="row justify-content-center ">
                        <div class="col-sm-8 ">
                            <ul class="list-group">
                                @foreach ($pesanan as $d)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $d->detailWisataFk->paketFk->nama_wisata }} |
                                        {{ $d->detailWisataFk->nama_paket }} |
                                        {{ $d->tgl_awal }} - {{ $d->tgl_akhir }} |
                                        Rp.{{ $d->total_harga }}
                                        {{-- {!! QrCode::size(100)->generate('Id Pesanan: ' . $d->id) !!} --}}
                                        <span class="">
                                            @if ($d->status == 'dibatalkan')
                                                <h2>Pesanan dibatalkan </h2>
                                            @elseif($d->status == 'belum bayar')
                                                <a href="{{ route('pesanan-qrcode', $d->id) }}" class="btn btn-primary">
                                                    Bayar
                                                </a>
                                            @else
                                                <h2>Sudah bayar</h2>
                                                <div class="about-btn">
                                                    <a target="_blank" href="{{ route('pesanan-nota', $d->id) }} "
                                                        class="about-view packages-btn btn">
                                                        Nota
                                                    </a>
                                                </div>
                                            @endif

                                        </span>

                                    </li>
                                @endforeach
                            </ul>
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
