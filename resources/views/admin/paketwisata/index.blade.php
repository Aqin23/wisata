@extends('admin/layout.template')
@section('main')
    <div class="section-header">
        <h1>Paket Wisata</h1>
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
                <a class="btn btn-outline-primary" href="{{ route('paketwisata.create') }}">
                    + Tambah Paket
                </a>
            </div>
            <div class="card-body p-0">

                <table id="datatable1" class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Wisata</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($PaketWisata as $p)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td> {{ $p->nama_wisata }} </td>

                                <td>
                                    <img src="{{ asset('storage/' . $p->foto) }}" width="70px" alt="">

                                </td>

                                <td>
                                    <form action="{{ route('paketwisata.destroy', $p->id) }}" method="POST">
                                        <a href="{{ route('paketwisata.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Anda Yakin Data dihapus?')"
                                            class="btn btn-danger btn-xs  "><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>

        </div>
    </div>
@endsection
