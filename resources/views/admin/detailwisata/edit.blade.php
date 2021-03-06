@extends('admin/layout.template')
@section('main')
    <div class="section-header">
        <h1>Edit</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Detail Paket Wisata</a></div>
            <div class="breadcrumb-item"><a href="#">Edit</a></div>

        </div>

    </div>
    <div class="pull-left my-3">
        <a class="btn btn-info" href="{{ route('detailwisata.index') }}"> Back</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="section-body">


        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <form action="{{ route('detailwisata.update', $DetailWisata->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Wisata</label>
                                <select class="form-control" name="wisata">
                                    @foreach ($paketWisata as $p)
                                        @if ($p->id == $DetailWisata->id_paketwisata)
                                            <option value="{{ $p->id }}" selected>{{ $p->nama_wisata }}</option>
                                        @else
                                            <option value="{{ $p->id }}">{{ $p->nama_wisata }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Wisata</label>
                                <input name="nama_paket" value="{{ $DetailWisata->nama_paket }}" type="text"
                                    class="form-control" required="yes">
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <div class="input-group">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp.
                                        </div>
                                    </div>
                                    <input type="text" value="{{ $DetailWisata->harga }}" name="harga"
                                        class="form-control currency" required="yes">
                                </div>
                            </div>



                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input name="deskripsi" value="{{ $DetailWisata->desc }}" type="text"
                                    class="form-control" required="yes">
                            </div>

                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
