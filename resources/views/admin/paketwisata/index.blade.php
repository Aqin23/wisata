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
            <div class="card-body ">

                <table id="paket" class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Wisata</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PaketWisata as $p)
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
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
@push('script-custom')
    <script>
        $(function() {
            var jml = $('th').length;
            // alert(jml - 1)
            var col = jml - 1;
            $("#paket").DataTable({
                columnDefs: [{
                    "searchable": false,
                    "orderable": false,
                    "targets": col,
                }],
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#paket_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
