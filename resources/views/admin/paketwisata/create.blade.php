@extends('admin/layout.template')
@section('main')
    <div class="section-header">
        <h1>Tambah wisata</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Tambah</div>
        </div>
    </div>
    <div class="pull-left my-3">
        <a class="btn btn-info" href="{{ route('paketwisata.index') }}"> Back</a>
    </div>

    <div class="section-body">


        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <form action="{{ route('paketwisata.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Wisata</label>
                                <input name="nama_wisata" type="text" class="form-control" required="yes">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input name="foto" id="foto" type="file" class="form-control" required="yes">
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
