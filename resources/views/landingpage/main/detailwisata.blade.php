@extends('landingpage.index')
@include('landingpage.header')
@section('main')
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
                    @foreach ($DetailWisata as $p)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ asset('storage/' . $p->paketFk->foto) }}" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>{{ $p->nama_paket }}</h3>
                                    <div class="packages-para">
                                        Paket Wisata {{ $p->nama_paket }}
                                        {{ $p->harga }}
                                        {{ $p->desc }}
                                    </div>
                                    <!--/.packages-para-->

                                    <!--/.packages-review-->
                                    <div class="about-btn">
                                        <a href="{{ route('checkout', $p->id) }}" class="about-view packages-btn">
                                            Pesan
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
@endsection
