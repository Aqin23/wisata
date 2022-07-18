@extends('landingpage.index')
@include('landingpage.header')
@section('main')
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    Paket Wisata
                </h2>
                <p>
                    Berbagai Paket Wisata
                </p>
            </div>
            <!--/.gallery-header-->

            <div class="blog-content">
                <div class="row">
                    @foreach ($DetailWisata as $p)
                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>{{ $p->nama_paket }} </h2>
                                <div class="thumbnail-img">
                                    <img src="{{ asset('storage/' . $p->paketFk->foto) }}" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div>
                                    <!--/.thumbnail-img-overlay-->

                                </div>
                                <!--/.thumbnail-img-->
                                <div class="caption mb-2">
                                    <div class="blog-txt ">
                                        <h3>

                                            Rp.{{ number_format($p->harga, 0, ',', '.') }}

                                        </h3>
                                        <p>
                                            {{ $p->desc }}
                                        </p>

                                    </div>

                                    <a href="{{ route('checkout', $p->id) }}" class="about-view packages-btn">
                                        Pesan
                                    </a>

                                    <!--/.blog-txt-->
                                </div>
                                <!--/.caption-->
                            </div>
                            <!--/.thumbnail-->

                        </div>
                    @endforeach
                    <!--/.col-->


                </div>
                <!--/.row-->
            </div>




            <!--/.row-->
        </div>



        <!--/.single-package-item-->


        <!--/.container-->

    </section>
@endsection
