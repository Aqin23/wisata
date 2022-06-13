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

      <div class="table-responsive">
        @php
        $no = 1;
        @endphp
        <table class="table table-striped table-md">
          <tr>
            <th>No</th>
            <th>Nama Wisata</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>

          @foreach ($PaketWisata as $p)
          <tr>
            <td>{{ $no++ }} </td>
            <td> {{ $p->nama_wisata }} </td>

            <td>
              {{ $p->foto }}
            </td>
            <form action="{{ route('paketwisata.destroy',$p->id) }}" method="POST">
              <td><a href="{{ route('paketwisata.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Anda Yakin Data dihapus?')" class="btn btn-danger btn-xs  "><i class="fas fa-trash"></i></button>
              </td>
            </form>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <div class="card-footer text-right">
      <nav class="d-inline-block">
        <ul class="pagination mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

@endsection