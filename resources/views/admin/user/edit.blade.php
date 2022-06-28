@extends('admin/layout.template')
@section('main')
    <div class="section-header">
        <h1>Edit</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="#">Edit</a></div>

        </div>

    </div>
    <div class="pull-left my-3">
        <a class="btn btn-info" href="{{ route('user.index') }}"> Back</a>
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

                    <form action="{{ route('user.update', $User->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="name" value="{{ $User->name }}" type="text" class="form-control"
                                    required="yes">
                            </div>


                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" value="{{ $User->email }}" type="text" class="form-control"
                                    required="yes">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" value="{{ $User->alamat }}" type="text" class="form-control"
                                    required="yes">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" value="{{ $User->password }}" type="password" class="form-control"
                                    required="yes">
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role">

                                    <option value="petugas">Petugas</option>
                                    <option value="pelanggan">Pelanggan</option>

                                </select>
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
