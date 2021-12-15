@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Galleri Video</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('galleri_video.index') }}">Galleri Video</a>
                    <li class="breadcrumb-item active">Tambah Galleri Video</li>
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
                        <form action="{{ route('galleri_video.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" value="galleri_video" name="type" id="type">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                                @if($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Embed Link</label>
                                <input type="text" class="form-control" name="embed_link" id="embed_link"
                                    value="{{ old('embed_link') }}">
                                @if($errors->has('embed_link'))
                                <small class="text-danger">{{ $errors->first('embed_link') }}</small>
                                @endif
                            </div>

                            <a href="{{ route('galleri_video.index') }}" class="btn btn-danger">Kembali</a>
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