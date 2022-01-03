@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user-akun-view') }}">User</a>
                    </li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if(session()->has('message'))
                    <p>{{ session()->get('message') }}</p>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body table-responsive ">
                        <form action="{{ route('update-akun-user') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    value="{{$user->username}}" disabled>
                                @if($errors->has('username'))
                                <small class="text-danger">{{ $errors->first('username') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}"
                                    disabled>
                                @if($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{$user->nama}}"
                                    disabled>
                                @if($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nomor Handphone</label>
                                <input type="number" class="form-control" name="nomor_handphone" id="nomor_handphone"
                                    disabled value="{{$user->nomor_handphone}}">
                                @if($errors->has('nomor_handphone'))
                                <small class="text-danger">{{ $errors->first('nomor_handphone') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="admin" {{ $user->level == 'admin' ? 'selected' : ''}}>Admin</option>
                                    <option value="wali" {{ $user->level == 'wali' ? 'selected' : ''}}>
                                        Wali
                                    </option>
                                </select>
                            </div>

                            <div class=" form-group">
                                <label for="">Password </label>
                                <input type="password" class="input-tambahan-shadow form-control" name="password"
                                    placeholder="Password">
                                @if ($errors->has('password'))
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif

                            </div>

                            <div class=" form-group">
                                <label for="">Password Confirmation </label>

                                <input type="password" class="input-tambahan-shadow form-control"
                                    name="password_confirmation" placeholder="Password Confirmation">
                                @if ($errors->has('password_confirmation'))
                                <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                @endif
                            </div>


                            <a href="{{ route('user-akun-view') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>




</div><!-- /.container-fluid -->

<!-- /.content -->
@endsection