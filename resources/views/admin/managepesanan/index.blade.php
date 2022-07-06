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
        <h1>Pesanan</h1>
    </div>


    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="card-body">

                <div class="card-body p-0">
                    <table id="datatable1" class="table table-striped table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nama Wisata</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Pesanan as $p)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td> id{{ $p->id }} </td>
                                    <td> {{ $p->userFk->name }} </td>
                                    <td> {{ $p->detailWisataFk->paketFk->nama_wisata . ' ' . $p->detailWisataFk->nama_paket }}
                                    </td>
                                    <td> {{ $p->tgl_awal }} </td>
                                    <td> {{ $p->tgl_akhir }} </td>
                                    <td> {{ $p->total_harga }} </td>
                                    <td> {{ $p->status }} </td>
                                    <td>
                                        @if ($p->status == 'belum bayar')
                                            <a href="{{ route('managePesanan-verifikasi', $p->id) }}"
                                                class="btn btn-warning">Verifikasi</a>
                                            <a href="{{ route('managePesanan-batal', $p->id) }}"
                                                class="btn btn-danger my-2">Batalkan</a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @push('script-custom')
    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#example tfoot th').each(function(i) {
                var title = $('#example thead th').eq($(this).index()).text();
                $(this).html('<input type="text" placeholder="' + title + '" data-index="' + i + '" />');
            });

            // DataTable
            var table = $('#example').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: true
            });

            // Filter event handler
            $(table.table().container()).on('keyup', 'tfoot input', function() {
                table
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });
        });
    </script>
@endpush --}}
