@extends('admin/layout.template')
@section('main')
    <div class="section-header">
        <h1>User</h1>
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
                <a class="btn btn-outline-primary" href="{{ route('user.create') }}">
                    + Tambah User
                </a>
            </div>
            <div class="card-body p-0">

                <table id="datatable1" class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Role</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>

                    @foreach ($User as $u)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td> {{ $u->name }} </td>
                                <td> {{ $u->email }} </td>
                                <td> {{ $u->alamat }} </td>
                                <td> {{ $u->role }} </td>

                                <td>
                                    <form action="{{ route('user.destroy', $u->id) }}" method="POST">
                                        <a href="{{ route('user.edit', $u->id) }}" class="btn btn-warning">Edit</a>
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
