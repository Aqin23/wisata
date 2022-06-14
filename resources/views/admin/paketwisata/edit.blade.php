@extends('admin/layout.template')
@section('main')
<div class="section-header">
    <h1>Edit</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Paket Wisata</a></div>
        <div class="breadcrumb-item"><a href="#">Edit</a></div>

    </div>

</div>
<div class="pull-left my-3">
    <a class="btn btn-info" href="{{ route('paketwisata.index') }}"> Back</a>
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

                <form action="{{ route('paketwisata.update', $PaketWisata->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Wisata</label>
                            <input name="nama_wisata" value="{{ $PaketWisata->nama_wisata }}" type="text" class="form-control" required="yes">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input name="foto" type="text" value="{{ $PaketWisata->foto }}" class="form-control" required="yes">
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