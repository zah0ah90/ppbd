@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Guru</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Guru</li>
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
                        <form action="{{ route('guru.update',$guru->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $guru->nama }}">
                                @if($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki Laki" {{ $guru->status == 'Laki Laki' ? 'selected' : ''}}>Laki
                                        Laki</option>
                                    <option value="Perempuan" {{ $guru->status == 'Perempuan' ? 'selected' : ''}}>
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mengajar Sejak</label>
                                <input type="date" class="form-control" name="mengajar_sejak" id="mengajar_sejak"
                                    value="{{ $guru->mengajar_sejak }}">
                                @if($errors->has('mengajar_sejak'))
                                <small class="text-danger">{{ $errors->first('mengajar_sejak') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                    value="{{ $guru->tanggal_lahir }}">
                                @if($errors->has('tanggal_lahir'))
                                <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Wali Kelas</label>
                                <input type="text" class="form-control" name="wali_kelas" id="wali_kelas"
                                    value="{{ $guru->wali_kelas }}">
                                @if($errors->has('wali_kelas'))
                                <small class="text-danger">{{ $errors->first('wali_kelas') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="image" id="image">
                                @if($errors->has('image'))
                                <small class="text-danger">{{ $errors->first('image') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $guru->status == 1 ? 'selected' : ''}}>Tampilkan</option>
                                    <option value="0" {{ $guru->status == 0 ? 'selected' : ''}}>Tidak Di Tampilkan
                                    </option>
                                </select>
                            </div>
                            <a href="{{ route('guru.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Data</button>
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