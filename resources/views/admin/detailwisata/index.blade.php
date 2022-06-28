@extends('admin/layout.template')
@section('main')
    {{-- <table id="datatable1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Andi</td>
            </tr>
        </tbody>
    </table> --}}

    <div class="section-header">
        <h1>Detail Paket Wisata</h1>
    </div>


    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-header">
                <!-- Button trigger for primary themes modal -->


                <a class="btn btn-outline-primary" href="{{ route('detailwisata.create') }}">
                    + Tambah Detail Paket
                </a>


            </div>
            <div class="card-body p-0">
                <table id="datatable1" class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Kategori Paket</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($DetailWisata as $p)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td> {{ $p->paketFk->nama_wisata }} </td>
                                <td> {{ $p->nama_paket }} </td>
                                <td> {{ $p->harga }} </td>
                                <td> {{ $p->desc }} </td>
                                <td>
                                    <form action="{{ route('user.destroy', $p->id) }}" method="POST">
                                        <a href="{{ route('detailwisata.edit', $p->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Anda Yakin Data dihapus?')"
                                            class="btn btn-danger btn-xs  "><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
