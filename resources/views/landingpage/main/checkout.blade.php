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
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-6">
                            <form action="{{ route('checkout-store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Paket Wisata</label>
                                    <input type="hidden" name="id_detailwisata" class="form-control"
                                        value="{{ $DetailWisata->id }}">
                                    <input type="text" class="form-control"
                                        value="{{ $DetailWisata->paketFk->nama_wisata . ' | ' . $DetailWisata->nama_paket }}"
                                        disabled>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Harga Perhari</label>
                                    <input type="hidden" class="form-control" value="{{ $DetailWisata->harga }}"
                                        id="harga">
                                    <input type="text" class="form-control"
                                        value="Rp.{{ number_format($DetailWisata->harga, 0, ',', '.') }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Awal</label>
                                    <input type="date" class="form-control" name="tgl_awal" id="tgl_awal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Akhir</label>
                                    <input type="date" class="form-control" name="tgl_akhir" id="tgl_akhir">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Total Harga</label>
                                    <input type="hidden" class="form-control" name="total_harga" id="total_harga">
                                    <input type="text" class="form-control" id="rp" disabled>
                                </div>
                                <button type="submit" class="about-view packages-btn">
                                    Checkout
                                </button>

                                @error('id_detailWisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('tgl_awal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('tgl_akhir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('total_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </form>
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
@push('script-custom')
    <script>
        $(document).ready(function() {
            $("#tgl_akhir").change(function() {
                var tglAwal = $('#tgl_awal').val()
                var tglAkhir = $('#tgl_akhir').val()
                var harga = $('#harga').val()

                var date1 = new Date(tglAwal);
                var date2 = new Date(tglAkhir);
                // hitung perbedaan waktu dari dua tanggal
                var waktu = date2.getTime() - date1.getTime();
                // hitung jml hari antara dua tanggal
                var hari = waktu / (1000 * 3600 * 24);
                let rupiah = Intl.NumberFormat('id-ID');

                var totalHarga = harga * hari;
                $('#total_harga').val(totalHarga)
                $('#rp').val('Rp.' + rupiah.format(totalHarga))
            });
        });
    </script>
@endpush
