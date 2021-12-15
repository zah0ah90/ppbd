@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Pengumuman</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}">Pengumuman</a>
                    <li class="breadcrumb-item active">Tambah Pengumuman</li>
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
                        <form action="{{ route('pengumuman.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" value="pengumuman" name="type" id="type">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                                @if($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Tanggal Posting</label>
                                <input type="date" class="form-control" name="tanggal_posting" id="tanggal_posting"
                                    value="{{ old('tanggal_posting') }}">
                                @if($errors->has('tanggal_posting'))
                                <small class="text-danger">{{ $errors->first('tanggal_posting') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" class="form-control" rows="3" name="keterangan" id="keterangan">{{ old('keterangan') }}
                                </textarea>
                                @if($errors->has('keterangan'))
                                <small class="text-danger">{{ $errors->first('keterangan') }}</small>
                                @endif
                            </div>
                            <a href="{{ route('pengumuman.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>




    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection